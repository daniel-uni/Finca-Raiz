<?php

namespace App\Global;

class GlobalValue
{
    const GLOBAL_ID                 = 'id';
    const TABLE_USER                = 'users';
    const USER_EMAIL                = 'email';
    const USER_PASSWORD             = 'password';
    const USER_EMAIL_VERIFICATE_AT  = 'email_verified_at';
    const USER_ADDRESS              = 'address';
    const USER_PHONE                = 'phone';
    const USER_VALIDATE             = 'validate';
    const USER_NAME                 = 'name';
    const USER_ROL                  = 'rol_id';

    const TABLE_ROL                 = 'rols';
    const ROL_NAME                  = 'name_rol';
    const ROL_VALIDATE              = 'validate_rol';

    const TABLE_PROPERTY            = 'properties';
    const PROPERTY_NAME             = 'name_prop';
    const PROPERTY_ADDRESS          = 'address_prop';
    const PROPERTY_PRICE            = 'price_prop';
    const PROPERTY_FOR_SALE         = 'sale_prop';
    const PROPERTY_TYPE             = 'type_prop';
    const PROPERTY_BEDROOMS         = 'bedroom_prop';
    const PROPERTY_BATHROOMS        = 'bathroom_prop';
    const PROPERTY_PARKING          = 'parking_prop';
    const PROPERTY_AREA             = 'area_prop';
    const PROPERTY_STRATUM          = 'stratum_prop';
    const PROPERTY_ANTIQUITY        = 'antiquity_prop';
    const PROPERTY_FLOOR            = 'floor_prop';
    const PROPERTY_ADMINISTRATION   = 'admin_prop';
    const PROPERTY_USER_ID          = 'user_id';
    const PROPERTY_ID_DEPARTAMNET   = 'departament_id';
    const PROPERTY_ID_REAL_AGENCY   = 'id_real_agency';

    const TABLE_REAL_ESTATE_AGENCY  = 'real_estate_agencies';
    const REAL_AGENCY_NAME          = 'name_real';
    const REAL_AGENCY_ADDRESS       = 'address_real';
    const REAL_AGENCY_PHONE         = 'phone_real';
    const REAL_AGENCY_EMAIL         = 'email_real';
    const REAL_AGENCY_GAIN          = 'gain_real';
    const REAL_AGENCY_FIXED_PHONE   = 'fixed_phone_real';

    const TABLE_DEPARTMENT          = 'departments';
    const DEPARTEMT_NAME            = 'name_depart';
}