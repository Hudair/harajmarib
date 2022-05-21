<?php 

return [
    'accepted' => ':attribute kabul edilmelidir.',
    'active_url' => ':attribute geçerli bir URL olmalıdır.',
    'after' => ':attribute şundan daha eski bir tarih olmalıdır :date.',
    'after_or_equal' => ':attribute tarihi :date tarihinden sonra veya tarihine eşit olmalıdır.',
    'alpha' => ':attribute sadece harflerden oluşmalıdır.',
    'alpha_dash' => ':attribute sadece harfler, rakamlar ve tirelerden oluşmalıdır.',
    'alpha_num' => ':attribute sadece harfler ve rakamlar içermelidir.',
    'array' => ':attribute dizi olmalıdır.',
    'before' => ':attribute şundan daha önceki bir tarih olmalıdır :date.',
    'before_or_equal' => ':attribute tarihi :date tarihinden önce veya tarihine eşit olmalıdır.',
    'between' => [
        'numeric' => ':attribute :min - :max arasında olmalıdır.',
        'file' => ':attribute :min - :max arasındaki kilobayt değeri olmalıdır.',
        'string' => ':attribute :min - :max arasında karakterden oluşmalıdır.',
        'array' => ':attribute :min - :max arasında nesneye sahip olmalıdır.',
    ],
    'boolean' => ':attribute sadece doğru veya yanlış olmalıdır.',
    'confirmed' => ':attribute tekrarı eşleşmiyor.',
    'date' => ':attribute geçerli bir tarih olmalıdır.',
    'date_equals' => 'The :attribute must be a date equal to :date.',
    'date_format' => ':attribute :format biçimi ile eşleşmiyor.',
    'different' => ':attribute ile :other birbirinden farklı olmalıdır.',
    'digits' => ':attribute :digits rakam olmalıdır.',
    'digits_between' => ':attribute :min ile :max arasında rakam olmalıdır.',
    'dimensions' => ':attribute görsel ölçüleri geçersiz.',
    'distinct' => ':attribute alanı yinelenen bir değere sahip.',
    'email' => ':attribute biçimi geçersiz.',
    'exists' => 'Seçili :attribute geçersiz.',
    'file' => ':attribute dosya olmalıdır.',
    'filled' => ':attribute alanının doldurulması zorunludur.',
    'gt' => [
        'numeric' => 'The :attribute must be greater than :value.',
        'file' => 'The :attribute must be greater than :value kilobytes.',
        'string' => 'The :attribute must be greater than :value characters.',
        'array' => 'The :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'The :attribute must be greater than or equal :value.',
        'file' => 'The :attribute must be greater than or equal :value kilobytes.',
        'string' => 'The :attribute must be greater than or equal :value characters.',
        'array' => 'The :attribute must have :value items or more.',
    ],
    'image' => ':attribute alanı resim dosyası olmalıdır.',
    'in' => ':attribute değeri geçersiz.',
    'in_array' => ':attribute alanı :other içinde mevcut değil.',
    'integer' => ':attribute tamsayı olmalıdır.',
    'ip' => ':attribute geçerli bir IP adresi olmalıdır.',
    'ipv4' => ':attribute geçerli bir IPv4 adresi olmalıdır.',
    'ipv6' => ':attribute geçerli bir IPv6 adresi olmalıdır.',
    'json' => ':attribute geçerli bir JSON değişkeni olmalıdır.',
    'lt' => [
        'numeric' => 'The :attribute must be less than :value.',
        'file' => 'The :attribute must be less than :value kilobytes.',
        'string' => 'The :attribute must be less than :value characters.',
        'array' => 'The :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'The :attribute must be less than or equal :value.',
        'file' => 'The :attribute must be less than or equal :value kilobytes.',
        'string' => 'The :attribute must be less than or equal :value characters.',
        'array' => 'The :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => ':attribute değeri :max değerinden küçük olmalıdır.',
        'file' => ':attribute değeri :max kilobayt değerinden küçük olmalıdır.',
        'string' => ':attribute değeri :max karakter değerinden küçük olmalıdır.',
        'array' => ':attribute değeri :max adedinden az nesneye sahip olmalıdır.',
    ],
    'mimes' => ':attribute dosya biçimi :values olmalıdır.',
    'mimetypes' => ':attribute dosya biçimi :values olmalıdır.',
    'min' => [
        'numeric' => ':attribute değeri :min değerinden büyük olmalıdır.',
        'file' => ':attribute değeri :min kilobayt değerinden büyük olmalıdır.',
        'string' => ':attribute değeri :min karakter değerinden büyük olmalıdır.',
        'array' => ':attribute en az :min nesneye sahip olmalıdır.',
    ],
    'not_in' => 'Seçili :attribute geçersiz.',
    'not_regex' => ':attribute biçimi geçersiz.',
    'numeric' => ':attribute sayı olmalıdır.',
    'present' => ':attribute alanı mevcut olmalıdır.',
    'regex' => ':attribute biçimi geçersiz.',
    'required' => ':attribute alanı gereklidir.',
    'required_if' => ':attribute alanı, :other :value değerine sahip olduğunda zorunludur.',
    'required_unless' => ':attribute alanı, :other alanı :values değerlerinden birine sahip olmadığında zorunludur.',
    'required_with' => ':attribute alanı :values varken zorunludur.',
    'required_with_all' => ':attribute alanı herhangi bir :values değeri varken zorunludur.',
    'required_without' => ':attribute alanı :values yokken zorunludur.',
    'required_without_all' => ':attribute alanı :values değerlerinden herhangi biri yokken zorunludur.',
    'same' => ':attribute ile :other eşleşmelidir.',
    'size' => [
        'numeric' => ':attribute :size olmalıdır.',
        'file' => ':attribute :size kilobyte olmalıdır.',
        'string' => ':attribute :size karakter olmalıdır.',
        'array' => ':attribute :size nesneye sahip olmalıdır.',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values',
    'string' => ':attribute dizge olmalıdır.',
    'timezone' => ':attribute geçerli bir saat dilimi olmalıdır.',
    'unique' => ':attribute daha önceden kayıt edilmiş.',
    'uploaded' => ':attribute yüklemesi başarısız.',
    'url' => ':attribute biçimi geçersiz.',
    'uuid' => 'The :attribute must be a valid UUID.',
    'custom' => [
        'database_connection' => [
            'required' => 'Can\'t connect to MySQL server',
        ],
        'database_not_empty' => [
            'required' => 'The database is not empty. Please empty the database or specify <a href="./database">another database</a>.',
        ],
        'promo_code_not_valid' => [
            'required' => 'The promo code is not valid',
        ],
        'smtp_valid' => [
            'required' => 'Can\'t connect to SMTP server',
        ],
        'yaml_parse_error' => [
            'required' => 'Can\'t parse yaml. Please check the syntax',
        ],
        'file_not_found' => [
            'required' => 'File not found.',
        ],
        'not_zip_archive' => [
            'required' => 'The file is not a zip package.',
        ],
        'zip_archive_unvalid' => [
            'required' => 'Cannot read the package.',
        ],
        'custom_criteria_empty' => [
            'required' => 'Custom criteria cannot be empty',
        ],
        'php_bin_path_invalid' => [
            'required' => 'Invalid PHP executable. Please check again.',
        ],
        'can_not_empty_database' => [
            'required' => 'Cannot DROP certain tables. Please cleanup your database manually and try again.',
        ],
        'can_not_create_database_tables' => [
            'required' => 'Cannot create certain tables. Please make sure you have full privileges on the database and try again.',
        ],
        'can_not_import_database_data' => [
            'required' => 'Cannot import all the app required data. Please try again.',
        ],
        'recaptcha_invalid' => [
            'required' => 'Invalid reCAPTCHA check.',
        ],
        'payment_method_not_valid' => [
            'required' => 'Something went wrong with payment method setting. Please check again.',
        ],
    ],
    'attributes' => [
        'gender' => 'gender',
        'gender_id' => 'gender',
        'name' => 'name',
        'first_name' => 'first name',
        'last_name' => 'last name',
        'user_type' => 'user type',
        'user_type_id' => 'user type',
        'country' => 'country',
        'country_code' => 'country',
        'phone' => 'phone',
        'address' => 'address',
        'mobile' => 'mobile',
        'sex' => 'sex',
        'year' => 'year',
        'month' => 'month',
        'day' => 'day',
        'hour' => 'hour',
        'minute' => 'minute',
        'second' => 'second',
        'username' => 'username',
        'email' => 'email address',
        'password' => 'password',
        'password_confirmation' => 'password confirmation',
        'g-recaptcha-response' => 'captcha',
        'accept_terms' => 'terms',
        'category' => 'category',
        'category_id' => 'category',
        'post_type' => 'reklam türü',
        'post_type_id' => 'reklam türü',
        'title' => 'başlık',
        'body' => 'gövde',
        'description' => 'tanım',
        'excerpt' => 'alıntı',
        'date' => 'date',
        'time' => 'time',
        'available' => 'available',
        'size' => 'size',
        'price' => 'price',
        'salary' => 'salary',
        'contact_name' => 'name',
        'location' => 'location',
        'admin_code' => 'location',
        'city' => 'city',
        'city_id' => 'city',
        'package' => 'package',
        'package_id' => 'package',
        'payment_method' => 'payment method',
        'payment_method_id' => 'payment method',
        'sender_name' => 'name',
        'subject' => 'subject',
        'message' => 'message',
        'report_type' => 'report type',
        'report_type_id' => 'report type',
        'file' => 'file',
        'filename' => 'filename',
        'picture' => 'picture',
        'resume' => 'resume',
        'login' => 'login',
        'code' => 'code',
        'token' => 'token',
        'comment' => 'comment',
        'rating' => 'rating',
        'locale' => 'locale',
        'currencies' => 'currencies',
        'tags' => 'Tags',
        'from_name' => 'name',
        'from_email' => 'email',
        'from_phone' => 'phone',
        'captcha' => 'security code',
    ],
    'captcha' => 'The :attribute field is not correct.',
    'recaptcha' => 'The :attribute field is not correct.',
    'phone' => 'The :attribute field contains an invalid number.',
    'phone_number' => 'Your phone number is not valid.',
    'required_package_id' => 'You have to select a premium listing option to continue.',
    'required_payment_method_id' => 'You have to select a payment method to continue.',
    'blacklist_email_rule' => 'This email address is blacklisted.',
    'blacklist_domain_rule' => 'The domain of your email address is blacklisted.',
    'blacklist_ip_rule' => 'The :attribute must be a valid IP address.',
    'blacklist_word_rule' => 'The :attribute contains a banned words or phrases.',
    'blacklist_title_rule' => 'The :attribute contains a banned words or phrases.',
    'between_rule' => 'The :attribute must be between :min and :max characters.',
    'username_is_valid_rule' => 'The :attribute field must be an alphanumeric string.',
    'username_is_allowed_rule' => 'The :attribute is not allowed.',
    'locale_of_language_rule' => 'The :attribute field is not valid.',
    'locale_of_country_rule' => 'The :attribute field is not valid.',
    'currencies_codes_are_valid_rule' => 'The :attribute field is not valid.',
    'custom_field_unique_rule' => 'The :field_1 have this :field_2 assigned already.',
    'custom_field_unique_rule_field' => 'The :field_1 is already assigned to this :field_2.',
    'custom_field_unique_children_rule' => 'A child :field_1 of the :field_1 have this :field_2 assigned already.',
    'custom_field_unique_children_rule_field' => 'The :field_1 is already assign to one :field_2 of this :field_2.',
    'custom_field_unique_parent_rule' => 'The parent :field_1 of the :field_1 have this :field_2 assigned already.',
    'custom_field_unique_parent_rule_field' => 'The :field_1 is already assign to the parent :field_2 of this :field_2.',
    'mb_alphanumeric_rule' => 'Please enter a valid content in the :attribute field.',
    'date_is_valid_rule' => 'The :attribute field does not contain a valid date.',
    'date_future_is_valid_rule' => 'The date of :attribute field need to be in the future.',
    'date_past_is_valid_rule' => 'The date of :attribute field need to be in the past.',
    'video_link_is_valid_rule' => 'The :attribute field does not contain a valid (Youtube or Vimeo) video link.',
    'sluggable_rule' => 'The :attribute field contains invalid characters only.',
    'uniqueness_of_listing_rule' => 'You\'ve already posted this listing. It cannot be duplicated.',
    'uniqueness_of_unverified_listing_rule' => 'You\'ve already posted this listing. Please check your email address or SMS to follow the instructions for validation.',
];