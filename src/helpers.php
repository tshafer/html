<?php

if (! function_exists('link_to')) {
    /**
     * Generate a HTML link.
     *
     * @param string $url
     * @param string $title
     * @param array  $attributes
     * @param bool   $secure
     * @param bool   $escape
     *
     * @return string
     */
    function link_to($url, $title = null, $attributes = [], $secure = null, $escape = true)
    {
        return app('html')->link($url, $title, $attributes, $secure, $escape);
    }
}

if (! function_exists('link_to_asset')) {
    /**
     * Generate a HTML link to an asset.
     *
     * @param string $url
     * @param string $title
     * @param array  $attributes
     * @param bool   $secure
     *
     * @return string
     */
    function link_to_asset($url, $title = null, $attributes = [], $secure = null)
    {
        return app('html')->linkAsset($url, $title, $attributes, $secure);
    }
}

if (! function_exists('link_to_route')) {
    /**
     * Generate a HTML link to a named route.
     *
     * @param string $name
     * @param string $title
     * @param array  $parameters
     * @param array  $attributes
     *
     * @return string
     */
    function link_to_route($name, $title = null, $parameters = [], $attributes = [])
    {
        return app('html')->linkRoute($name, $title, $parameters, $attributes);
    }
}

if (! function_exists('link_to_action')) {
    /**
     * Generate a HTML link to a controller action.
     *
     * @param string $action
     * @param string $title
     * @param array  $parameters
     * @param array  $attributes
     *
     * @return string
     */
    function link_to_action($action, $title = null, $parameters = [], $attributes = [])
    {
        return app('html')->linkAction($action, $title, $parameters, $attributes);
    }
}


if (!function_exists('state_select')) {

    /**
     * @return mixed
     */
    function state_select()
    {
        app('html')->macro(
            'state_select',
          function (
            $name = 'state',
            $selected = null,
            $options = ['class' => 'form-control'],
            $title = 'Select a state'
          ) {
              $states = [
                ''   => $title,
                'AL' => 'Alabama',
                'AK' => 'Alaska',
                'AZ' => 'Arizona',
                'AR' => 'Arkansas',
                'CA' => 'California',
                'CO' => 'Colorado',
                'CT' => 'Connecticut',
                'DE' => 'Delaware',
                'DC' => 'District Of Columbia',
                'FL' => 'Florida',
                'GA' => 'Georgia',
                'HI' => 'Hawaii',
                'ID' => 'Idaho',
                'IL' => 'Illinois',
                'IN' => 'Indiana',
                'IA' => 'Iowa',
                'KS' => 'Kansas',
                'KY' => 'Kentucky',
                'LA' => 'Louisiana',
                'ME' => 'Maine',
                'MD' => 'Maryland',
                'MA' => 'Massachusetts',
                'MI' => 'Michigan',
                'MN' => 'Minnesota',
                'MS' => 'Mississippi',
                'MO' => 'Missouri',
                'MT' => 'Montana',
                'NE' => 'Nebraska',
                'NV' => 'Nevada',
                'NH' => 'New Hampshire',
                'NJ' => 'New Jersey',
                'NM' => 'New Mexico',
                'NY' => 'New York',
                'NC' => 'North Carolina',
                'ND' => 'North Dakota',
                'OH' => 'Ohio',
                'OK' => 'Oklahoma',
                'OR' => 'Oregon',
                'PA' => 'Pennsylvania',
                'RI' => 'Rhode Island',
                'SC' => 'South Carolina',
                'SD' => 'South Dakota',
                'TN' => 'Tennessee',
                'TX' => 'Texas',
                'UT' => 'Utah',
                'VT' => 'Vermont',
                'VA' => 'Virginia',
                'WA' => 'Washington',
                'WV' => 'West Virginia',
                'WI' => 'Wisconsin',
                'WY' => 'Wyoming',
              ];

              if (!$selected && isset($name)) {
                  $selected = old($name);
              }

              return app('form')->select($name, $states, $selected, $options);
          }
        );

        return app('html')->state_select();
    }
}

if (!function_exists('country_select')) {

    /**
     * @return mixed
     */
    function country_select()
    {
        app('html')->macro(
            'country_select',
          function (
            $name = 'country',
            $selected = 'US',
            $options = ['class' => 'form-control'],
            $title = 'Select a Country'
          ) {
              $countries = [
                ''   => $title,
                'AF' => 'Afghanistan',
                'AL' => 'Albania',
                'DZ' => 'Algeria',
                'AS' => 'American Samoa',
                'AD' => 'Andorra',
                'AO' => 'Angola',
                'AI' => 'Anguilla',
                'AQ' => 'Antarctica',
                'AG' => 'Antigua and Barbuda',
                'AR' => 'Argentina',
                'AM' => 'Armenia',
                'AW' => 'Aruba',
                'AU' => 'Australia',
                'AT' => 'Austria',
                'AZ' => 'Azerbaijan',
                'BS' => 'Bahamas',
                'BH' => 'Bahrain',
                'BD' => 'Bangladesh',
                'BB' => 'Barbados',
                'BY' => 'Belarus',
                'BE' => 'Belgium',
                'BZ' => 'Belize',
                'BJ' => 'Benin',
                'BM' => 'Bermuda',
                'BT' => 'Bhutan',
                'BO' => 'Bolivia',
                'BA' => 'Bosnia and Herzegovina',
                'BW' => 'Botswana',
                'BV' => 'Bouvet Island',
                'BR' => 'Brazil',
                'BQ' => 'British Antarctic Territory',
                'IO' => 'British Indian Ocean Territory',
                'VG' => 'British Virgin Islands',
                'BN' => 'Brunei',
                'BG' => 'Bulgaria',
                'BF' => 'Burkina Faso',
                'BI' => 'Burundi',
                'KH' => 'Cambodia',
                'CM' => 'Cameroon',
                'CA' => 'Canada',
                'CT' => 'Canton and Enderbury Islands',
                'CV' => 'Cape Verde',
                'KY' => 'Cayman Islands',
                'CF' => 'Central African Republic',
                'TD' => 'Chad',
                'CL' => 'Chile',
                'CN' => 'China',
                'CX' => 'Christmas Island',
                'CC' => 'Cocos [Keeling] Islands',
                'CO' => 'Colombia',
                'KM' => 'Comoros',
                'CG' => 'Congo - Brazzaville',
                'CD' => 'Congo - Kinshasa',
                'CK' => 'Cook Islands',
                'CR' => 'Costa Rica',
                'HR' => 'Croatia',
                'CU' => 'Cuba',
                'CY' => 'Cyprus',
                'CZ' => 'Czech Republic',
                'CI' => 'Côte d’Ivoire',
                'DK' => 'Denmark',
                'DJ' => 'Djibouti',
                'DM' => 'Dominica',
                'DO' => 'Dominican Republic',
                'NQ' => 'Dronning Maud Land',
                'DD' => 'East Germany',
                'EC' => 'Ecuador',
                'EG' => 'Egypt',
                'SV' => 'El Salvador',
                'GQ' => 'Equatorial Guinea',
                'ER' => 'Eritrea',
                'EE' => 'Estonia',
                'ET' => 'Ethiopia',
                'FK' => 'Falkland Islands',
                'FO' => 'Faroe Islands',
                'FJ' => 'Fiji',
                'FI' => 'Finland',
                'FR' => 'France',
                'GF' => 'French Guiana',
                'PF' => 'French Polynesia',
                'TF' => 'French Southern Territories',
                'FQ' => 'French Southern and Antarctic Territories',
                'GA' => 'Gabon',
                'GM' => 'Gambia',
                'GE' => 'Georgia',
                'DE' => 'Germany',
                'GH' => 'Ghana',
                'GI' => 'Gibraltar',
                'GR' => 'Greece',
                'GL' => 'Greenland',
                'GD' => 'Grenada',
                'GP' => 'Guadeloupe',
                'GU' => 'Guam',
                'GT' => 'Guatemala',
                'GG' => 'Guernsey',
                'GN' => 'Guinea',
                'GW' => 'Guinea-Bissau',
                'GY' => 'Guyana',
                'HT' => 'Haiti',
                'HM' => 'Heard Island and McDonald Islands',
                'HN' => 'Honduras',
                'HK' => 'Hong Kong SAR China',
                'HU' => 'Hungary',
                'IS' => 'Iceland',
                'IN' => 'India',
                'ID' => 'Indonesia',
                'IR' => 'Iran',
                'IQ' => 'Iraq',
                'IE' => 'Ireland',
                'IM' => 'Isle of Man',
                'IL' => 'Israel',
                'IT' => 'Italy',
                'JM' => 'Jamaica',
                'JP' => 'Japan',
                'JE' => 'Jersey',
                'JT' => 'Johnston Island',
                'JO' => 'Jordan',
                'KZ' => 'Kazakhstan',
                'KE' => 'Kenya',
                'KI' => 'Kiribati',
                'KW' => 'Kuwait',
                'KG' => 'Kyrgyzstan',
                'LA' => 'Laos',
                'LV' => 'Latvia',
                'LB' => 'Lebanon',
                'LS' => 'Lesotho',
                'LR' => 'Liberia',
                'LY' => 'Libya',
                'LI' => 'Liechtenstein',
                'LT' => 'Lithuania',
                'LU' => 'Luxembourg',
                'MO' => 'Macau SAR China',
                'MK' => 'Macedonia',
                'MG' => 'Madagascar',
                'MW' => 'Malawi',
                'MY' => 'Malaysia',
                'MV' => 'Maldives',
                'ML' => 'Mali',
                'MT' => 'Malta',
                'MH' => 'Marshall Islands',
                'MQ' => 'Martinique',
                'MR' => 'Mauritania',
                'MU' => 'Mauritius',
                'YT' => 'Mayotte',
                'FX' => 'Metropolitan France',
                'MX' => 'Mexico',
                'FM' => 'Micronesia',
                'MI' => 'Midway Islands',
                'MD' => 'Moldova',
                'MC' => 'Monaco',
                'MN' => 'Mongolia',
                'ME' => 'Montenegro',
                'MS' => 'Montserrat',
                'MA' => 'Morocco',
                'MZ' => 'Mozambique',
                'MM' => 'Myanmar [Burma]',
                'NA' => 'Namibia',
                'NR' => 'Nauru',
                'NP' => 'Nepal',
                'NL' => 'Netherlands',
                'AN' => 'Netherlands Antilles',
                'NT' => 'Neutral Zone',
                'NC' => 'New Caledonia',
                'NZ' => 'New Zealand',
                'NI' => 'Nicaragua',
                'NE' => 'Niger',
                'NG' => 'Nigeria',
                'NU' => 'Niue',
                'NF' => 'Norfolk Island',
                'KP' => 'North Korea',
                'VD' => 'North Vietnam',
                'MP' => 'Northern Mariana Islands',
                'NO' => 'Norway',
                'OM' => 'Oman',
                'PC' => 'Pacific Islands Trust Territory',
                'PK' => 'Pakistan',
                'PW' => 'Palau',
                'PS' => 'Palestinian Territories',
                'PA' => 'Panama',
                'PZ' => 'Panama Canal Zone',
                'PG' => 'Papua New Guinea',
                'PY' => 'Paraguay',
                'YD' => "People's Democratic Republic of Yemen",
                'PE' => 'Peru',
                'PH' => 'Philippines',
                'PN' => 'Pitcairn Islands',
                'PL' => 'Poland',
                'PT' => 'Portugal',
                'PR' => 'Puerto Rico',
                'QA' => 'Qatar',
                'RO' => 'Romania',
                'RU' => 'Russia',
                'RW' => 'Rwanda',
                'RE' => 'Réunion',
                'BL' => 'Saint Barthélemy',
                'SH' => 'Saint Helena',
                'KN' => 'Saint Kitts and Nevis',
                'LC' => 'Saint Lucia',
                'MF' => 'Saint Martin',
                'PM' => 'Saint Pierre and Miquelon',
                'VC' => 'Saint Vincent and the Grenadines',
                'WS' => 'Samoa',
                'SM' => 'San Marino',
                'SA' => 'Saudi Arabia',
                'SN' => 'Senegal',
                'RS' => 'Serbia',
                'CS' => 'Serbia and Montenegro',
                'SC' => 'Seychelles',
                'SL' => 'Sierra Leone',
                'SG' => 'Singapore',
                'SK' => 'Slovakia',
                'SI' => 'Slovenia',
                'SB' => 'Solomon Islands',
                'SO' => 'Somalia',
                'ZA' => 'South Africa',
                'GS' => 'South Georgia and the South Sandwich Islands',
                'KR' => 'South Korea',
                'ES' => 'Spain',
                'LK' => 'Sri Lanka',
                'SD' => 'Sudan',
                'SR' => 'Suriname',
                'SJ' => 'Svalbard and Jan Mayen',
                'SZ' => 'Swaziland',
                'SE' => 'Sweden',
                'CH' => 'Switzerland',
                'SY' => 'Syria',
                'ST' => 'São Tomé and Príncipe',
                'TW' => 'Taiwan',
                'TJ' => 'Tajikistan',
                'TZ' => 'Tanzania',
                'TH' => 'Thailand',
                'TL' => 'Timor-Leste',
                'TG' => 'Togo',
                'TK' => 'Tokelau',
                'TO' => 'Tonga',
                'TT' => 'Trinidad and Tobago',
                'TN' => 'Tunisia',
                'TR' => 'Turkey',
                'TM' => 'Turkmenistan',
                'TC' => 'Turks and Caicos Islands',
                'TV' => 'Tuvalu',
                'UM' => 'U.S. Minor Outlying Islands',
                'PU' => 'U.S. Miscellaneous Pacific Islands',
                'VI' => 'U.S. Virgin Islands',
                'UG' => 'Uganda',
                'UA' => 'Ukraine',
                'SU' => 'Union of Soviet Socialist Republics',
                'AE' => 'United Arab Emirates',
                'GB' => 'United Kingdom',
                'US' => 'United States',
                'ZZ' => 'Unknown or Invalid Region',
                'UY' => 'Uruguay',
                'UZ' => 'Uzbekistan',
                'VU' => 'Vanuatu',
                'VA' => 'Vatican City',
                'VE' => 'Venezuela',
                'VN' => 'Vietnam',
                'WK' => 'Wake Island',
                'WF' => 'Wallis and Futuna',
                'EH' => 'Western Sahara',
                'YE' => 'Yemen',
                'ZM' => 'Zambia',
                'ZW' => 'Zimbabwe',
                'AX' => 'Åland Islands',
              ];

              if (!$selected && isset($name)) {
                  $selected = old($name);
              }

              return app('form')->select($name, $countries, $selected, $options);
          }
        );

        return app('html')->country_select();
    }
}



if (!function_exists('form_group')) {

    /**
     * Generate a bootstrap form group.
     *
     * @param $type
     * @param $name
     *
     * @return string
     */
    function form_group($type, $name)
    {
        return '<div class="form-group">'.label($name).$type($name, null, ['class' => 'form-control']).'</div>';
    }
}

if (!function_exists('form')) {
    /**
     * Return an instance of the Form Builder.
     *
     * @return Collective\Html\FormBuilder
     */
    function form()
    {
        return app('form');
    }
}

if (!function_exists('open')) {
    /**
     * @param array $options
     *
     * @return mixed
     */
    function open(array $options = [])
    {
        return app('form')->open($options);
    }
}

if (!function_exists('model')) {
    /**
     * @param \Illuminate\Database\Eloquent\Model $model
     * @param array                               $options
     *
     * @return mixed
     */
    function model($model, array $options = [])
    {
        return app('form')->model($model, $options);
    }
}

if (!function_exists('close')) {
    /**
     * @return mixed
     */
    function close()
    {
        return app('form')->close();
    }
}

if (!function_exists('token')) {
    /**
     * @return mixed
     */
    function token()
    {
        return app('form')->token();
    }
}

if (!function_exists('label')) {
    /**
     * @param string $name
     * @param string $value
     * @param array  $options
     *
     * @return mixed
     */
    function label($name, $value = null, $options = [])
    {
        return app('form')->label($name, $value, $options);
    }
}

if (!function_exists('input')) {
    /**
     * @param string $type
     * @param string $name
     * @param string $value
     * @param array  $options
     *
     * @return mixed
     */
    function input($type, $name, $value = null, $options = [])
    {
        return app('form')->input($type, $name, $value, $options);
    }
}

if (!function_exists('text')) {
    /**
     * @param string $name
     * @param string $value
     * @param array  $options
     *
     * @return mixed
     */
    function text($name, $value = null, $options = [])
    {
        return app('form')->text($name, $value, $options);
    }
}

if (!function_exists('number')) {
    /**
     * @param string $name
     * @param string $value
     * @param array  $options
     *
     * @return mixed
     */
    function number($name, $value = null, $options = [])
    {
        return app('form')->number($name, $value, $options);
    }
}

if (!function_exists('password')) {
    /**
     * @param string $name
     * @param array  $options
     *
     * @return mixed
     */
    function password($name, $options = [])
    {
        return app('form')->password($name, $options);
    }
}

if (!function_exists('hidden')) {
    /**
     * @param string $name
     * @param string $value
     * @param array  $options
     *
     * @return mixed
     */
    function hidden($name, $value = null, $options = [])
    {
        return app('form')->hidden($name, $value, $options);
    }
}

if (!function_exists('email')) {
    /**
     * @param string $name
     * @param string $value
     * @param array  $options
     *
     * @return mixed
     */
    function email($name, $value = null, $options = [])
    {
        return app('form')->email($name, $value, $options);
    }
}

if (!function_exists('file_input')) {
    /**
     * @param string $name
     * @param array  $options
     *
     * @return mixed
     */
    function file_input($name, $options = [])
    {
        return app('form')->file($name, $options);
    }
}

if (!function_exists('textarea')) {
    /**
     * @param string $name
     * @param string $value
     * @param array  $options
     *
     * @return mixed
     */
    function textarea($name, $value = null, $options = [])
    {
        return app('form')->textarea($name, $value, $options);
    }
}

if (!function_exists('select')) {
    /**
     * @param string $name
     * @param array  $list
     * @param string $selected
     * @param array  $options
     *
     * @return mixed
     */
    function select($name, $list = [], $selected = null, $options = [])
    {
        return app('form')->select($name, $list, $selected, $options);
    }
}

if (!function_exists('select_range')) {
    /**
     * @param string $name
     * @param string $begin
     * @param string $end
     * @param string $selected
     * @param array  $options
     *
     * @return mixed
     */
    function select_range($name, $begin, $end, $selected = null, $options = [])
    {
        return app('form')->selectRange($name, $begin, $end, $selected, $options);
    }
}

if (!function_exists('select_year')) {
    /**
     * @param string $name
     * @param string $begin
     * @param string $end
     * @param string $selected
     * @param array  $options
     *
     * @return mixed
     */
    function select_year($name, $begin, $end, $selected = null, $options = [])
    {
        return app('form')->selectYear($name, $begin, $end, $selected, $options);
    }
}

if (!function_exists('select_month')) {
    /**
     * @param string $name
     * @param string $selected
     * @param array  $options
     * @param string $format
     *
     * @return mixed
     */
    function select_month($name, $selected = null, $options = [], $format = '%B')
    {
        return app('form')->selectMonth($name, $selected, $options, $format);
    }
}

if (!function_exists('get_select_option')) {
    /**
     * @param $display
     * @param $value
     * @param $selected
     *
     * @return mixed
     */
    function get_select_option($display, $value, $selected)
    {
        return app('form')->getSelectOption($display, $value, $selected);
    }
}

if (!function_exists('checkbox')) {
    /**
     * @param string $name
     * @param int    $value
     * @param string $checked
     * @param array  $options
     *
     * @return mixed
     */
    function checkbox($name, $value = 1, $checked = null, $options = [])
    {
        return app('form')->checkbox($name, $value, $checked, $options);
    }
}

if (!function_exists('radio')) {
    /**
     * @param string $name
     * @param string $value
     * @param string $checked
     * @param array  $options
     *
     * @return mixed
     */
    function radio($name, $value = null, $checked = null, $options = [])
    {
        return app('form')->radio($name, $value, $checked, $options);
    }
}

if (!function_exists('reset_button')) {
    /**
     * @param string $url
     * @param string $name
     * @param array  $attributes
     *
     * @return mixed
     */
    function reset_button($url, $name, $attributes = [])
    {
        return app('form')->reset($url, $name, $attributes);
    }
}

if (!function_exists('image_input')) {
    /**
     * @param string $url
     * @param string $name
     * @param array  $attributes
     *
     * @return mixed
     */
    function image_input($url, $name, $attributes = [])
    {
        return app('form')->image($url, $name, $attributes);
    }
}

if (!function_exists('submit')) {
    /**
     * @param string $value
     * @param array  $options
     *
     * @return mixed
     */
    function submit($value = null, $options = [])
    {
        return app('form')->submit($value, $options);
    }
}

if (!function_exists('button')) {
    /**
     * @param string $value
     * @param array  $options
     *
     * @return mixed
     */
    function button($name = null, $options = [])
    {
        return app('form')->button($name, $options);
    }
}

if (!function_exists('get_id_attribute')) {
    /**
     * @param $name
     * @param $attributes
     *
     * @return mixed
     */
    function get_id_attribute($name, $attributes)
    {
        return app('form')->getIdAttribute($name, $attributes);
    }
}

if (!function_exists('get_value_attribute')) {
    /**
     * @param string $name
     * @param string $value
     *
     * @return mixed
     */
    function get_value_attribute($name, $value = null)
    {
        return app('form')->getValueAttribute($name, $value);
    }
}

if (!function_exists('old_input_is_empty')) {
    /**
     * @return mixed
     */
    function old_input_is_empty()
    {
        return app('form')->oldInputIsEmpty();
    }
}
