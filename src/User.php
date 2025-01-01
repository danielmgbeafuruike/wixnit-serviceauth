<?php

    namespace Wixnit\Serviceauth;

    use Wixnit\App\Model;

    class User extends Model
    {
        public string $FirstName;
        public string $LastName;
        public string $Token;
        public string $Timezone;
		public string $TimezoneCode;
        public string $Country;
        public string $City;
        public string $State;

        public string $CurrentCountry;
        public string $CurrentCity;
        public string $CurrentState;
    }