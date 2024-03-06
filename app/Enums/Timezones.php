<?php

namespace App\Enums;

enum Timezones: string
{
    case PACIFIC_MIDWAY = 'Pacific/Midway'; // (GMT-11:00) Midway Island, Samoa
    case AMERICA_ADAK = 'America/Adak'; // (GMT-10:00) Hawaii-Aleutian
    case ETC_GMT_PLUS_10 = 'Etc/GMT+10'; // (GMT-10:00) Hawaii
    case PACIFIC_MARQUESAS = 'Pacific/Marquesas'; // (GMT-09:30) Marquesas Islands
    case PACIFIC_GAMBIER = 'Pacific/Gambier'; // (GMT-09:00) Gambier Islands
    case AMERICA_ANCHORAGE = 'America/Anchorage'; // (GMT-09:00) Alaska
    case  AMERICA_MONTREAL =  "America/Montreal"; // (GMT-09:00) Alaska
    case  America_Vancouver =  "America/Vancouver"; // (GMT-09:00) Alaska
    case AMERICA_ENSENADA = 'America/Ensenada'; // (GMT-08:00) Tijuana, Baja California
    case ETC_GMT_PLUS_8 = 'Etc/GMT+8'; // (GMT-08:00) Pitcairn Islands
    case AMERICA_LOS_ANGELES = 'America/Los_Angeles'; // (GMT-08:00) Pacific Time (US & Canada)
    case AMERICA_DENVER = 'America/Denver'; // (GMT-07:00) Mountain Time (US & Canada)
    case AMERICA_CHIHUAHUA = 'America/Chihuahua'; // (GMT-07:00) Chihuahua, La Paz, Mazatlan
    case AMERICA_DAWSON_CREEK = 'America/Dawson_Creek'; // (GMT-07:00) Arizona
    case AMERICA_BELIZE = 'America/Belize'; // (GMT-06:00) Saskatchewan, Central America
    case AMERICA_CANCUN = 'America/Cancun'; // (GMT-06:00) Guadalajara, Mexico City, Monterrey
    case CHILE_EASTER_ISLAND = 'Chile/EasterIsland'; // (GMT-06:00) Easter Island
    case AMERICA_CHICAGO = 'America/Chicago'; // (GMT-06:00) Central Time (US & Canada)
    case AMERICA_NEW_YORK = 'America/New_York'; // (GMT-05:00) Eastern Time (US & Canada)
    case AMERICA_HAVANA = 'America/Havana'; // (GMT-05:00) Cuba
    case AMERICA_BOGOTA = 'America/Bogota'; // (GMT-05:00) Bogota, Lima, Quito, Rio Branco
    case AMERICA_CARACAS = 'America/Caracas'; // (GMT-04:30) Caracas
    case AMERICA_SANTIAGO = 'America/Santiago'; // (GMT-04:00) Santiago
    case AMERICA_LA_PAZ = 'America/La_Paz'; // (GMT-04:00) La Paz
    case ATLANTIC_STANLEY = 'Atlantic/Stanley'; // (GMT-04:00) Faukland Islands
    case AMERICA_CAMPO_GRANDE = 'America/Campo_Grande'; // (GMT-04:00) Brazil
    case AMERICA_GOOSE_BAY = 'America/Goose_Bay'; // (GMT-04:00) Atlantic Time (Goose Bay)
    case AMERICA_GLACE_BAY = 'America/Glace_Bay'; // (GMT-04:00) Atlantic Time (Canada)
    case AMERICA_ST_JOHNS = 'America/St_Johns'; // (GMT-03:30) Newfoundland
    case AMERICA_ARAGUAINA = 'America/Araguaina'; // (GMT-03:00) UTC-3
    case AMERICA_MONTEVIDEO = 'America/Montevideo'; // (GMT-03:00) Montevideo
    case AMERICA_MIQUELON = 'America/Miquelon'; // (GMT-03:00) Miquelon, St. Pierre
    case AMERICA_GODTHAB = 'America/Godthab'; // (GMT-03:00) Greenland
    case AMERICA_ARGENTINA_BUENOS_AIRES = 'America/Argentina/Buenos_Aires'; // (GMT-03:00) Buenos Aires
    case AMERICA_SAO_PAULO = 'America/Sao_Paulo'; // (GMT-03:00) Brasilia
    case AMERICA_NORONHA = 'America/Noronha'; // (GMT-02:00) Mid-Atlantic
    case ATLANTIC_CAPE_VERDE = 'Atlantic/Cape_Verde'; // (GMT-01:00) Cape Verde Is.
    case ATLANTIC_AZORES = 'Atlantic/Azores'; // (GMT-01:00) Azores
    case EUROPE_BELFAST = 'Europe/Belfast'; // (GMT) Greenwich Mean Time : Belfast
    case EUROPE_DUBLIN = 'Europe/Dublin'; // (GMT) Greenwich Mean Time : Dublin
    case EUROPE_LISBON = 'Europe/Lisbon'; // (GMT) Greenwich Mean Time : Lisbon
    case EUROPE_LONDON = 'Europe/London'; // (GMT) Greenwich Mean Time : London
    case AFRICA_ABIDJAN = 'Africa/Abidjan'; // (GMT) Monrovia, Reykjavik
    case EUROPE_AMSTERDAM = 'Europe/Amsterdam'; // (GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna
    case EUROPE_BELGRADE = 'Europe/Belgrade'; // (GMT+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague
    case EUROPE_BRUSSELS = 'Europe/Brussels'; // (GMT+01:00) Brussels, Copenhagen, Madrid, Paris
    case AFRICA_ALGIERS = 'Africa/Algiers'; // (GMT+01:00) West Central Africa
    case AFRICA_WINDHOEK = 'Africa/Windhoek'; // (GMT+01:00) Windhoek
    case ASIA_BEIRUT = 'Asia/Beirut'; // (GMT+02:00) Beirut
    case AFRICA_CAIRO = 'Africa/Cairo'; // (GMT+02:00) Cairo
    case ASIA_GAZA = 'Asia/Gaza'; // (GMT+02:00) Gaza
    case AFRICA_BLANTYRE = 'Africa/Blantyre'; // (GMT+02:00) Harare, Pretoria
    case ASIA_JERUSALEM = 'Asia/Jerusalem'; // (GMT+02:00) Jerusalem
    case EUROPE_MINSK = 'Europe/Minsk'; // (GMT+02:00) Minsk
    case ASIA_DAMASCUS = 'Asia/Damascus'; // (GMT+02:00) Syria
    case EUROPE_MOSCOW = 'Europe/Mos';
}
