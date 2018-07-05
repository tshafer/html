<?php
    namespace Tshafer\Html;

    use Tshafer\Html\FormFacade as Form;
    use Illuminate\Support\Facades\Request;
    use Illuminate\Support\Facades\Route;
    use Illuminate\Support\Str;

    trait Linkable
    {

        /**
         * Get the resource name
         */
        protected function getResourceName()
        {
            return $this->resourceName ?: Str::lower( Str::plural( class_basename( $this ) ) );
        }

        /**
         * Create a View Link
         *
         * @return string
         */
        public function getViewLink()
        {
            $route = $this->getPrefix() . $this->getResourceName() . '.show';

            if (Route::has( $route )) {
                return link_to_route( $route, 'View', $this->id,
                    [ 'class' => 'btn btn-xs btn-primary' ] );
            }
        }

        /**
         * Get the prefix name
         *
         * @return string
         */
        protected function getPrefix()
        {
            return isset( $this->prefix ) ? $this->prefix . '.' : 'admin.';
        }

        /**
         * Create a Edit Link
         *
         * @return string
         */
        public function getEditLInk()
        {
            $route = $this->getPrefix() . $this->getResourceName() . '.edit';

            if (Route::has( $route )) {
                return link_to_route( $route, 'Edit', $this->id,
                    [ 'class' => 'btn btn-xs btn-info' ] );
            }
        }

        /**
         * Create a Delete Link
         *
         * @return string
         */
        public function getDeleteLink()
        {
            $route = $this->getPrefix() . $this->getResourceName() . '.destroy';

            if (Route::has( $route )) {
                return Form::open( [
                    'route'  => [ $route, $this->id ],
                    'method' => 'delete',
                    'style'  => 'display: inline;'
                ] )
                       . Form::submit( 'Delete', [ 'class' => 'btn btn-xs btn-danger' ] )
                       . Form::close();
            }
        }

        /**
         * Create a Restore Link
         *
         * @return string
         */
        public function getRestoreLink()
        {
            $route = $this->getPrefix() . $this->getResourceName() . '.restore';
            if (Route::has( $route )) {
                return Form::open( [
                    'route'  => [ $route, $this->id ],
                    'method' => 'patch',
                    'style'  => 'display: inline;'
                ] )
                       . Form::submit( 'Restore', [ 'class' => 'btn btn-xs btn-danger' ] )
                       . Form::close();
            }
        }

        /**
         * Create a Destroy Link
         *
         * @return string
         */
        public function getDestroyLink()
        {
            $route = $this->getPrefix() . $this->getResourceName() . '.forcedestroy';
            if (Route::has( $route )) {
                return Form::open( [
                    'route'  => [ $route, $this->id ],
                    'method' => 'post',
                    'style'  => 'display: inline;'
                ] ) . Form::submit( 'Delete',
                    [ 'class' => 'btn btn-xs btn-danger' ] ) . Form::close();
            }
        }

        /**
         * Create Table Links
         *
         * @return string
         */
        public function getTableLinks()
        {
            $segments = Request::segments();

            if ( ! in_array( 'trashed', $segments )) {
                return implode( ' ', [
                    $this->getViewLink(),
                    $this->getEditLInk(),
                    $this->getDeleteLink(),
                ] );
            } else {
                return implode( ' ', [
                    $this->getRestoreLink(),
                    $this->getDestroyLink(),
                ] );
            }
        }
    }
