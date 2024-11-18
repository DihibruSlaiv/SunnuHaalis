<?php 
namespace App\Services\Validation\v1;


/***************************************************************************
* VALIDATE RULES
*
* The rules for validating requests
*
* @version 1.0.0
* @namespace App\Services\Validation\v1\User
* @copyright Marse Jollof
* @author [Moses Carayol](https://github.com/DihibruSlaiv/MarseJollofAPI)
****************************************************************************/
 
class ValidationRules
{     
    const _DESCRIPTION = "nullable|regex:/^[a-zA-Z0-9.!,:;+\/' -]+$/|max:1000";
    const _NUMERIC = 'required|numeric|digits_between:1,9';
    const _TRANS_TYPE = ["Money Payed Out", "Money Received", "Service Rendered On Credit", "Service Received On Credit", "Goods Sold On Credit", "Goods Received On Credit"];
    
    const _GEO_POINT = 'required|regex:/^[-]?(([0-8]?[0-9])\.([0-9]{1,12}))$/';
    const _COUNTRY_ID = 'required|exists:country,id';
    const _TRIP = 'required|exists:tripbooking,id';
    const _NOTIFIABLE_ID = 'required|exists:notifications,notifiable_id';
    const _NOTIFICATION_ID = 'required|exists:notifications,id';
    const _RENTAL = 'required|exists:rentalbooking,id';
    const _VOLUME_CATEGORY = ['Below 8000cm3', '8000 to 27000 cm3', 'Above 27000cm3'];
    const _WEIGHT_CATEGORY = ['Below 10kg', '10kg to 25kg', '25kg to 40kg', 'Above 40kg'];
    const _ITEM_TYPE = ['document', 'package'];
    const _PICTURE = 'required|exists:mysql.MarseJollof.picture,id';
    const _TRACKING_NO = 'required|digits_between:10,10|exists:delivery,tracking_number';
    const _DELIVERY = 'required|exists:delivery,id';
    const _ANY = "required|regex:/^[a-zA-Z0-9.+,\/\[\]' _-]+$/|max:100";   
    const _FUEL = ['Petrol', 'Diesel', 'Hybrid', 'Electric'];
    const _VEHICLETYPE = ['Economic', 'Business', 'Comfort', 'Parcel', 'Premium', 'SUV', 'VIP'];
    const _NUMBER = 'required|numeric';
    const _TRANS = ['Manual', 'Automatic', 'CVT', 'Semi-Automatic', 'Dual Clutch'];
    const _BOOLEAN = 'required|boolean';
    const _VEHICLE_TYPE = 'required|exists:vehicle_type,id';
    const _VEHICLE_TYPE_NAME = 'required|exists:vehicle_type,name';
    const _ROLE = ['user', 'driver', 'admin'];
    const _ALPHA_NUM = "required|regex:/[a-zA-Z0-9-_\/\s]/|max:50|min:2";   
    const _VEHICLE = 'required|numeric|exists:vehicle,id';
    const _VEHICLE_REG = 'required|regex:/[a-zA-Z0-9-_\/\s]/|exists:vehicle,reg_no';
    const _USER = 'required|numeric|exists:users,id';

    const _CITY = 'required|regex:/[a-zA-Z\/\s]/|max:50';
    const _POSTCODE = 'nullable|max:50|min:5|string|regex:/[a-zA-Z0-9\/\s]/';
    const _PASSWORD = 'required|min:6|';
    const _EMAIL = 'nullable|email|max:255|unique:users,email';
    const _MOBILE = 'required|numeric|digits_between:9,9|unique:users,mobile';
    const _NAME = 'required|regex:/[a-zA-Z0-9-_\/\s]/|max:50|min:6|unique:users,name';
    const _ALPHA = "required|regex:/^[a-zA-Z -]+$/|max:50|min:2"; 

    const _PASSWORD_NEW = 'nullable|min:6|';
    const _EMAIL_NEW = 'nullable|email|max:255|unique:users,email';
    const _MOBILE_NEW = 'nullable|numeric|digits_between:9,9|unique:users,mobile';
    const _NAME_NEW = 'nullable|regex:/[a-zA-Z0-9-_\/\s]/|max:50|min:6|unique:users,name';
    const _ALPHA_NEW = "nullable|regex:/^[a-zA-Z -]+$/|max:50|min:2"; 

    const _REG_NO = 'required|max:10|min:7|unique:vehicle,reg_no|regex:/[a-zA-Z0-9\/\s]/';
    const _CHECK_REG_NO = 'required|max:10|min:7|exists:vehicle,reg_no|regex:/[a-zA-Z0-9\/\s]/';

    const _COMPANY_NAME = "required|max:50|min:2|unique:companies,name|regex:/^[a-zA-Z0-9.!,+' -_]+$/";
    const _COMPANY_MOBILE = 'required|numeric|digits_between:7,9|unique:companies,mobile';
    const _COMPANY_EMAIL = 'nullable|email|max:255|unique:companies,email';
    const _GENERAL_NAME = 'required|max:50|min:2|regex:/^[a-zA-Z0-9 -]+$/';
    
    
    
    
    
    const _REQUEST_PRODUCT = 'required|numeric|exists:mysql.MarseJollof.request_product,id';
    const _USER_PRODUCT = 'required|numeric|exists:mysql.MarseJollof.user_product,id';
    const _CHUNK = 'required|numeric|digits_between:1,2';    
    const _BARGAIN = 'required|numeric|exists:mongodb.MarseJollofSchema.countries,_id';
    const _PRODUCT = 'required|numeric|exists:mysql.MarseJollof.product,id';
    const _GENERAL_NAME_NULLABLE = "nullable|max:50|min:2|regex:/^[a-zA-Z0-9.!,+' -_]+$/";
    const _LOCATION = 'required|numeric|exists:mysql.MarseJollof.location,id';
    
    
    
   
    
    const _FILTER = 'required|max:1000|min:1|regex:/^[a-zA-Z0-9.:,{}\/" -]+$/';
    const _DATE = 'required|date_format:Y-m-d H:i:s';
    const _COUNTRY_NAME_EXISTS = 'required|regex:/^[a-zA-Z0-9\s ]+$/|max:50|min:2|exists:mysql.MarseJollof.country,name';
    const _CURRENCY_ARRAY = ['GMD', 'XOF', 'CVE', 'XAF', 'GHS', 'GNF', 'LRD', 'MRO', 'NGN', 'STD', 'SLL'];
    const _RATING = 'required|numeric|exists:mysql.MarseJollof.rating,id';
    const _PRODUCT_NAME = "required|max:50|min:2|unique:product,name|regex:/^[a-zA-Z0-9.!,+' -_]+$/";
    const _SUBCATEGORY = 'required|numeric|exists:mysql.MarseJollof.subcategory,id';
    
    const _PHOTO_HASH = 'required|exists:mysql.MarseJollof.picture,photo_hash';
    const _CHANNEL = 'required|regex:/^user.[0-9]{1,12}.chats.[0-9]{1,12}+$/';
    const _IS_AUDIO = 'required|file|mimes:audio/mpeg,mpga,mp3,wav,aac,m4a';

    const _MERCHANT = 'required|regex:/[a-zA-Z0-9\/\s]/|exists:mysql.MoneyHouse.entity_type,code';
    const _USER_NAME = 'required|max:50|min:6|regex:/[a-zA-Z0-9\/\s]/';
    const _COUNTRY_NAME_VALID = 'required|max:50|min:2|regex:/[a-zA-Z\/\s]/';
    
    const _MESSAGE = 'required|max:1000|min:1|regex:/[a-zA-Z0-9_\-!,.@£$%^&*()’~*-_+\/\s]/';    
    const _COUNTRY_NAME = 'required|regex:/[a-zA-Z0-9\/\s]/|max:50|min:2|unique:country,name';
    
    
    const _CURRENCY_EXISTS = '';
    const _ORDER = 'required|numeric|exists:mysql.MarseJollof.orders,id';
    const _ORDER_NO = 'required|numeric|exists:mysql.MarseJollof.orders,order_no';

   
}