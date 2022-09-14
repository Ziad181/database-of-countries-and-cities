<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = [

            [
                'id' => '1', 'name_ar' => 'المملكة العربية السعودية', 'name_fr' => 'Arabie Saoudite', 'name_en' => 'Saudi Arabia', 'code' => 'sa',
                'phone_code' => '+966',
                'currency' => 'SAR',
            ],

            [
                'id' => '2', 'name_ar' => 'الإمارات العربية المتحدة', 'name_fr' => 'Emirats Arabes Unis', 'name_en' => 'United Arab Emirates', 'code' => 'ae',
                'phone_code' => '+971',
                'currency' => 'AED',
            ],

            [
                'id' => '3', 'name_ar' => 'أفغانستان', 'name_fr' => 'L\'Afghanistan', 'name_en' => 'Afghanistan', 'code' => 'af',
                'phone_code' => '+93',
                'currency' => 'AFN',
            ],

            [
                'id' => '4', 'name_ar' => 'أنتيغوا وبربودا', 'name_fr' => 'Antigua-et-Barbuda', 'name_en' => 'Antigua and Barbuda', 'code' => 'ag',
                'phone_code' => '+1268',
                'currency' => 'XCD',
            ],

            [
                'id' => '5', 'name_ar' => 'أنغيلا', 'name_fr' => 'Anguilla', 'name_en' => 'Anguilla', 'code' => 'ai',
                'phone_code' => '+1264',
                'currency' => 'XCD',
            ],

            [
                'id' => '6', 'name_ar' => 'ألبانيا', 'name_fr' => 'Albanie', 'name_en' => 'Albania', 'code' => 'al',
                'phone_code' => '+355',
                'currency' => 'ALL',
            ],

            [
                'id' => '7', 'name_ar' => 'أرمينيا', 'name_fr' => 'Arménie', 'name_en' => 'Armenia', 'code' => 'am',
                'phone_code' => '+374',
                'currency' => 'AMD',
            ],

            [
                'id' => '8', 'name_ar' => 'جزر الأنتيل الهولندية', 'name_fr' => 'Antilles néerlandaises', 'name_en' => 'Netherlands Antilles', 'code' => 'an',
                'phone_code' => '+31',
                'currency' => 'EUR',
            ],

            [
                'id' => '9', 'name_ar' => 'أنغولا', 'name_fr' => 'Angola', 'name_en' => 'Angola', 'code' => 'ao',
                'phone_code' => '+244',
                'currency' => 'AOA',
            ],

            [
                'id' => '10', 'name_ar' => 'الأرجنتين', 'name_fr' => 'Argentine', 'name_en' => 'Argentina', 'code' => 'ar',
                'phone_code' => '+54',
                'currency' => 'ARS',
            ],

            [
                'id' => '11', 'name_ar' => 'النمسا', 'name_fr' => 'L\'Autriche', 'name_en' => 'Austria', 'code' => 'at',
                'phone_code' => '+43',
                'currency' => 'EUR',
            ],

            [
                'id' => '12', 'name_ar' => 'أستراليا', 'name_fr' => 'Australie', 'name_en' => 'Australia', 'code' => 'au',
                'phone_code' => '+61',
                'currency' => 'AUD',
            ],

            [
                'id' => '13', 'name_ar' => 'أروبا', 'name_fr' => 'Aruba', 'name_en' => 'Aruba', 'code' => 'aw',
                'phone_code' => '+297',
                'currency' => 'AWG',
            ],

            [
                'id' => '14', 'name_ar' => 'أذربيجان', 'name_fr' => 'Azerbaïdjan', 'name_en' => 'Azerbaijan', 'code' => 'az',
                'phone_code' => '+994',
                'currency' => 'AZN',
            ],

            [
                'id' => '15', 'name_ar' => 'البوسنة والهرسك', 'name_fr' => 'Bosnie Herzégovine', 'name_en' => 'Bosnia and Herzegovina', 'code' => 'ba',
                'phone_code' => '+387',
                'currency' => 'BAM',
            ],

            [
                'id' => '16', 'name_ar' => 'بربادوس', 'name_fr' => 'La Barbade', 'name_en' => 'Barbados', 'code' => 'bb',
                'phone_code' => '+1246',
                'currency' => 'BBD',
            ],

            [
                'id' => '17', 'name_ar' => 'بنغلاديش', 'name_fr' => 'Bangladesh', 'name_en' => 'Bangladesh', 'code' => 'bd',
                'phone_code' => '+880',
                'currency' => 'BDT',
            ],

            [
                'id' => '18', 'name_ar' => 'بلجيكا', 'name_fr' => 'Belgique', 'name_en' => 'Belgium', 'code' => 'be',
                'phone_code' => '+32',
                'currency' => 'EUR',
            ],

            [
                'id' => '19', 'name_ar' => 'بوركينا فاسو', 'name_fr' => 'Burkina Faso', 'name_en' => 'Burkina Faso', 'code' => 'bf',
                'phone_code' => '+226',
                'currency' => 'XOF',
            ],

            [
                'id' => '20', 'name_ar' => 'بلغاريا', 'name_fr' => 'Bulgarie', 'name_en' => 'Bulgaria', 'code' => 'bg',
                'phone_code' => '+359',
                'currency' => 'BGN',
            ],

            [
                'id' => '21', 'name_ar' => 'البحرين', 'name_fr' => 'Bahreïn', 'name_en' => 'Bahrain', 'code' => 'bh',
                'phone_code' => '+973',
                'currency' => 'BHD',
            ],

            [
                'id' => '22', 'name_ar' => 'بوروندي', 'name_fr' => 'Burundi', 'name_en' => 'Burundi', 'code' => 'bi',
                'phone_code' => '+257',
                'currency' => 'BIF',
            ],

            [
                'id' => '23', 'name_ar' => 'بنين', 'name_fr' => 'Bénin', 'name_en' => 'Benin', 'code' => 'bj',
                'phone_code' => '+229',
                'currency' => 'XOF',
            ],

            [
                'id' => '24', 'name_ar' => 'برمودا', 'name_fr' => 'Bermudes', 'name_en' => 'Bermuda', 'code' => 'bm',
                'phone_code' => '+1441',
                'currency' => 'BMD',
            ],

            [
                'id' => '25', 'name_ar' => 'بروناي دار السلام', 'name_fr' => 'Brunei Darussalam', 'name_en' => 'Brunei Darussalam', 'code' => 'bn',
                'phone_code' => '+673',
                'currency' => 'BND',
            ],

            [
                'id' => '26', 'name_ar' => 'بوليفيا', 'name_fr' => 'Bolivie', 'name_en' => 'Bolivia', 'code' => 'bo',
                'phone_code' => '+591',
                'currency' => 'BOB',
            ],

            [
                'id' => '27', 'name_ar' => 'البرازيل', 'name_fr' => 'Brésil', 'name_en' => 'Brazil', 'code' => 'br',
                'phone_code' => '+55',
                'currency' => 'BRL',
            ],

            [
                'id' => '28', 'name_ar' => 'الباهاما', 'name_fr' => 'Bahamas', 'name_en' => 'Bahamas', 'code' => 'bs',
                'phone_code' => '+1242',
                'currency' => 'BSD',
            ],

            [
                'id' => '29', 'name_ar' => 'بوتان', 'name_fr' => 'Bhoutan', 'name_en' => 'Bhutan', 'code' => 'bt',
                'phone_code' => '+975',
                'currency' => 'BTN',
            ],

            [
                'id' => '30', 'name_ar' => 'بوتسوانا', 'name_fr' => 'Botswana', 'name_en' => 'Botswana', 'code' => 'bw',
                'phone_code' => '+267',
                'currency' => 'BWP',
            ],

            [
                'id' => '31', 'name_ar' => 'روسيا البيضاء', 'name_fr' => 'Biélorussie', 'name_en' => 'Belarus', 'code' => 'by',
                'phone_code' => '+375',
                'currency' => 'BYN',
            ],

            [
                'id' => '32', 'name_ar' => 'بليز', 'name_fr' => 'Belize', 'name_en' => 'Belize', 'code' => 'bz',
                'phone_code' => '+501',
                'currency' => 'BZD',
            ],

            [
                'id' => '33', 'name_ar' => 'كندا', 'name_fr' => 'Canada', 'name_en' => 'Canada', 'code' => 'ca',
                'phone_code' => '+1',
                'currency' => 'CAD',
            ],

            [
                'id' => '34', 'name_ar' => 'جزر كوكوس (كيلينغ)', 'name_fr' => 'Îles Cocos (Keeling)', 'name_en' => 'Cocos (Keeling) Islands', 'code' => 'cc',
                'phone_code' => '+61',
                'currency' => 'AUD',
            ],

            [
                'id' => '35', 'name_ar' => 'جمهورية الكونغو الديموقراطية', 'name_fr' => 'République Démocratique du Congo', 'name_en' => 'Democratic Republic of the Congo', 'code' => 'cd',
                'phone_code' => '+242',
                'currency' => 'XAF',
            ],

            [
                'id' => '36', 'name_ar' => 'جمهورية افريقيا الوسطى', 'name_fr' => 'République centrafricaine', 'name_en' => 'Central African Republic', 'code' => 'cf',
                'phone_code' => '+236',
                'currency' => 'XAF',
            ],

            [
                'id' => '37', 'name_ar' => 'الكونغو', 'name_fr' => 'Congo', 'name_en' => 'Congo', 'code' => 'cg',
                'phone_code' => '+242',
                'currency' => 'XAF',
            ],

            [
                'id' => '38', 'name_ar' => 'سويسرا', 'name_fr' => 'Suisse', 'name_en' => 'Switzerland', 'code' => 'ch',
                'phone_code' => '+41',
                'currency' => 'CHF',
            ],

            [
                'id' => '39', 'name_ar' => 'ساحل العاج (ساحل العاج)', 'name_fr' => 'Cote D\'Ivoire (Côte d\'Ivoire)', 'name_en' => 'Cote D\'Ivoire (Ivory Coast)', 'code' => 'ci',
                'phone_code' => '+225',
                'currency' => 'XOF',
            ],

            [
                'id' => '40', 'name_ar' => 'جزر كوك', 'name_fr' => 'les Îles Cook', 'name_en' => 'Cook Islands', 'code' => 'ck',
                'phone_code' => '+682',
                'currency' => 'NZD',
            ],

            [
                'id' => '41', 'name_ar' => 'تشيلي', 'name_fr' => 'Chili', 'name_en' => 'Chile', 'code' => 'cl',
                'phone_code' => '+56',
                'currency' => 'CLP',
            ],

            [
                'id' => '42', 'name_ar' => 'الكاميرون', 'name_fr' => 'Cameroun', 'name_en' => 'Cameroon', 'code' => 'cm',
                'phone_code' => '+237',
                'currency' => 'XAF',
            ],

            [
                'id' => '43', 'name_ar' => 'الصين', 'name_fr' => 'Chine', 'name_en' => 'China', 'code' => 'cn',
                'phone_code' => '+86',
                'currency' => 'CNY',
            ],

            [
                'id' => '44', 'name_ar' => 'كولومبيا', 'name_fr' => 'Colombie', 'name_en' => 'Colombia', 'code' => 'co',
                'phone_code' => '+57',
                'currency' => 'COP',
            ],

            [
                'id' => '45', 'name_ar' => 'كوستا ريكا', 'name_fr' => 'Costa Rica', 'name_en' => 'Costa Rica', 'code' => 'cr',
                'phone_code' => '+506',
                'currency' => 'CRC',
            ],

            [
                'id' => '46', 'name_ar' => 'كوبا', 'name_fr' => 'Cuba', 'name_en' => 'Cuba', 'code' => 'cu',
                'phone_code' => '+53',
                'currency' => 'CUP',
            ],

            [
                'id' => '47', 'name_ar' => 'الرأس الأخضر', 'name_fr' => 'Cap-Vert', 'name_en' => 'Cape Verde', 'code' => 'cv',
                'phone_code' => '+238',
                'currency' => 'CVE',
            ],

            [
                'id' => '48', 'name_ar' => 'جزيرة الكريسماس', 'name_fr' => 'L\'île de noël', 'name_en' => 'Christmas Island', 'code' => 'cx',
                'phone_code' => '+61',
                'currency' => 'AUD',
            ],

            [
                'id' => '49', 'name_ar' => 'قبرص', 'name_fr' => 'Chypre', 'name_en' => 'Cyprus', 'code' => 'cy',
                'phone_code' => '+357',
                'currency' => 'EUR',
            ],

            [
                'id' => '50', 'name_ar' => 'جمهورية التشيك', 'name_fr' => 'République Tchèque', 'name_en' => 'Czech Republic', 'code' => 'cz',
                'phone_code' => '+420',
                'currency' => 'CZK',
            ],

            [
                'id' => '51', 'name_ar' => 'ألمانيا', 'name_fr' => 'Allemagne', 'name_en' => 'Germany', 'code' => 'de',
                'phone_code' => '+49',
                'currency' => 'EUR',
            ],

            [
                'id' => '52', 'name_ar' => 'جيبوتي', 'name_fr' => 'Djibouti', 'name_en' => 'Djibouti', 'code' => 'dj',
                'phone_code' => '+253',
                'currency' => 'DJF',
            ],

            [
                'id' => '53', 'name_ar' => 'الدنمارك', 'name_fr' => 'Danemark', 'name_en' => 'Denmark', 'code' => 'dk',
                'phone_code' => '+45',
                'currency' => 'DKK',
            ],

            [
                'id' => '54', 'name_ar' => 'دومينيكا', 'name_fr' => 'Dominique', 'name_en' => 'Dominica', 'code' => 'dm',
                'phone_code' => '+1767',
                'currency' => 'XCD',
            ],

            [
                'id' => '55', 'name_ar' => 'جمهورية الدومنيكان', 'name_fr' => 'République Dominicaine', 'name_en' => 'Dominican Republic', 'code' => 'do',
                'phone_code' => '+1849',
                'currency' => 'DOP',
            ],

            [
                'id' => '56', 'name_ar' => 'الجزائر', 'name_fr' => 'Algérie', 'name_en' => 'Algeria', 'code' => 'dz',
                'phone_code' => '+213',
                'currency' => 'DZD',
            ],

            [
                'id' => '57', 'name_ar' => 'الإكوادور', 'name_fr' => 'L\'Équateur', 'name_en' => 'Ecuador', 'code' => 'ec',
                'phone_code' => '+593',
                'currency' => 'USD',
            ],

            [
                'id' => '58', 'name_ar' => 'استونيا', 'name_fr' => 'Estonie', 'name_en' => 'Estonia', 'code' => 'ee',
                'phone_code' => '+372',
                'currency' => 'EUR',
            ],

            [
                'id' => '59', 'name_ar' => 'مصر', 'name_fr' => 'Egypte', 'name_en' => 'Egypt', 'code' => 'eg',
                'phone_code' => '+20',
                'currency' => 'EGP',
            ],

            [
                'id' => '60', 'name_ar' => 'الصحراء الغربية', 'name_fr' => 'Sahara occidental', 'name_en' => 'Western Sahara', 'code' => 'eh',
                'phone_code' => '+212',
                'currency' => 'MAD',
            ],

            [
                'id' => '61', 'name_ar' => 'إريتريا', 'name_fr' => 'Erythrée', 'name_en' => 'Eritrea', 'code' => 'er',
                'phone_code' => '+291',
                'currency' => 'ERN',
            ],

            [
                'id' => '62', 'name_ar' => 'إسبانيا', 'name_fr' => 'Espagne', 'name_en' => 'Spain', 'code' => 'es',
                'phone_code' => '+34',
                'currency' => 'EUR',
            ],

            [
                'id' => '63', 'name_ar' => 'أثيوبيا', 'name_fr' => 'Ethiopie', 'name_en' => 'Ethiopia', 'code' => 'et',
                'phone_code' => '+251',
                'currency' => 'ETB',
            ],

            [
                'id' => '64', 'name_ar' => 'فنلندا', 'name_fr' => 'Finlande', 'name_en' => 'Finland', 'code' => 'fi',
                'phone_code' => '+358',
                'currency' => 'EUR',
            ],

            [
                'id' => '65', 'name_ar' => 'فيجي', 'name_fr' => 'Fidji', 'name_en' => 'Fiji', 'code' => 'fj',
                'phone_code' => '+679',
                'currency' => 'FJD',
            ],

            [
                'id' => '66', 'name_ar' => 'جزر فوكلاند (مالفيناس)', 'name_fr' => 'Iles Malouines (Malouines)', 'name_en' => 'Falkland Islands (Malvinas)', 'code' => 'fk',
                'phone_code' => '+500',
                'currency' => 'FKP',
            ],

            [
                'id' => '67', 'name_ar' => 'ولايات ميكرونيزيا الموحدة', 'name_fr' => 'États fédérés de Micronésie', 'name_en' => 'Federated States of Micronesia', 'code' => 'fm',
                'phone_code' => '+691',
                'currency' => 'USD',
            ],

            [
                'id' => '68', 'name_ar' => 'جزر صناعية', 'name_fr' => 'Îles Féroé', 'name_en' => 'Faroe Islands', 'code' => 'fo',
                'phone_code' => '+298',
                'currency' => 'DKK',
            ],

            [
                'id' => '69', 'name_ar' => 'فرنسا', 'name_fr' => 'France', 'name_en' => 'France', 'code' => 'fr',
                'phone_code' => '+33',
                'currency' => 'EUR',
            ],

            [
                'id' => '70', 'name_ar' => 'الغابون', 'name_fr' => 'Gabon', 'name_en' => 'Gabon', 'code' => 'ga',
                'phone_code' => '+241',
                'currency' => 'XAF',
            ],

            [
                'id' => '71', 'name_ar' => 'بريطانيا العظمى (المملكة المتحدة)', 'name_fr' => 'Grande-Bretagne (UK)', 'name_en' => 'Great Britain (UK)', 'code' => 'gb',
                'phone_code' => '+44',
                'currency' => 'GBP',
            ],

            [
                'id' => '72', 'name_ar' => 'غرينادا', 'name_fr' => 'Grenade', 'name_en' => 'Grenada', 'code' => 'gd',
                'phone_code' => '+1473',
                'currency' => 'XCD',
            ],

            [
                'id' => '73', 'name_ar' => 'جورجيا', 'name_fr' => 'Géorgie', 'name_en' => 'Georgia', 'code' => 'ge',
                'phone_code' => '+995',
                'currency' => 'GEL',
            ],

            [
                'id' => '74', 'name_ar' => 'غيانا الفرنسية', 'name_fr' => 'Guinée Française', 'name_en' => 'French Guiana', 'code' => 'gf',
                'phone_code' => '+594',
                'currency' => 'EUR',
            ],

            [
                'id' => '75', 'name_ar' => 'لا شيء', 'name_fr' => 'NUL', 'name_en' => 'NULL', 'code' => 'gg',
                'phone_code' => 'null',
                'currency' => 'null',
            ],

            [
                'id' => '76', 'name_ar' => 'غانا', 'name_fr' => 'Ghana', 'name_en' => 'Ghana', 'code' => 'gh',
                'phone_code' => '+233',
                'currency' => 'GHS',
            ],

            [
                'id' => '77', 'name_ar' => 'جبل طارق', 'name_fr' => 'Gibraltar', 'name_en' => 'Gibraltar', 'code' => 'gi',
                'phone_code' => '+350',
                'currency' => 'GIP',
            ],

            [
                'id' => '78', 'name_ar' => 'الأرض الخضراء', 'name_fr' => 'Groenland', 'name_en' => 'Greenland', 'code' => 'gl',
                'phone_code' => '+299',
                'currency' => 'DKK',
            ],

            [
                'id' => '79', 'name_ar' => 'غامبيا', 'name_fr' => 'Gambie', 'name_en' => 'Gambia', 'code' => 'gm',
                'phone_code' => '+220',
                'currency' => 'GMD',
            ],

            [
                'id' => '80', 'name_ar' => 'غينيا', 'name_fr' => 'Guinée', 'name_en' => 'Guinea', 'code' => 'gn',
                'phone_code' => '+224',
                'currency' => 'GNF',
            ],

            [
                'id' => '81', 'name_ar' => 'جوادلوب', 'name_fr' => 'La guadeloupe', 'name_en' => 'Guadeloupe', 'code' => 'gp',
                'phone_code' => '+590',
                'currency' => 'EUR',
            ],

            [
                'id' => '82', 'name_ar' => 'غينيا الإستوائية', 'name_fr' => 'Guinée Équatoriale', 'name_en' => 'Equatorial Guinea', 'code' => 'gq',
                'phone_code' => '+240',
                'currency' => 'XAF',
            ],

            [
                'id' => '83', 'name_ar' => 'اليونان', 'name_fr' => 'Grèce', 'name_en' => 'Greece', 'code' => 'gr',
                'phone_code' => '+30',
                'currency' => 'EUR',
            ],

            [
                'id' => '84', 'name_ar' => 'جورجيا وجزر ساندويتش', 'name_fr' => 'Géorgie du Sud et les îles Sandwich du Sud', 'name_en' => 'S. Georgia and S. Sandwich Islands', 'code' => 'gs',
                'phone_code' => '+500',
                'currency' => 'GBP',
            ],

            [
                'id' => '85', 'name_ar' => 'غواتيمالا', 'name_fr' => 'Guatemala', 'name_en' => 'Guatemala', 'code' => 'gt',
                'phone_code' => '+502',
                'currency' => 'GTQ',
            ],

            [
                'id' => '86', 'name_ar' => 'غينيا بيساو', 'name_fr' => 'Guinée-Bissau', 'name_en' => 'Guinea-Bissau', 'code' => 'gw',
                'phone_code' => '+245',
                'currency' => 'XOF',
            ],

            [
                'id' => '87', 'name_ar' => 'غيانا', 'name_fr' => 'Guyane', 'name_en' => 'Guyana', 'code' => 'gy',
                'phone_code' => '+592',
                'currency' => 'GYD',
            ],

            [
                'id' => '88', 'name_ar' => 'هونغ كونغ', 'name_fr' => 'Hong Kong', 'name_en' => 'Hong Kong', 'code' => 'hk',
                'phone_code' => '+852',
                'currency' => 'HKD',
            ],

            [
                'id' => '89', 'name_ar' => 'هندوراس', 'name_fr' => 'Honduras', 'name_en' => 'Honduras', 'code' => 'hn',
                'phone_code' => '+504',
                'currency' => 'HNL',
            ],

            [
                'id' => '90', 'name_ar' => 'كرواتيا (هرفاتسكا)', 'name_fr' => 'Croatie (Hrvatska)', 'name_en' => 'Croatia (Hrvatska)', 'code' => 'hr',
                'phone_code' => '+385',
                'currency' => 'HRK',
            ],

            [
                'id' => '91', 'name_ar' => 'هايتي', 'name_fr' => 'Haïti', 'name_en' => 'Haiti', 'code' => 'ht',
                'phone_code' => '+509',
                'currency' => 'HTG',
            ],

            [
                'id' => '92', 'name_ar' => 'اليونان', 'name_fr' => 'Hongrie', 'name_en' => 'Hungary', 'code' => 'hu',
                'phone_code' => '+36',
                'currency' => 'HUF',
            ],

            [
                'id' => '93', 'name_ar' => 'أندونيسيا', 'name_fr' => 'Indonésie', 'name_en' => 'Indonesia', 'code' => 'id',
                'phone_code' => '+62',
                'currency' => 'IDR',
            ],

            [
                'id' => '94', 'name_ar' => 'أيرلندا', 'name_fr' => 'Irlande', 'name_en' => 'Ireland', 'code' => 'ie',
                'phone_code' => '+353',
                'currency' => 'EUR',
            ],

            [
                'id' => '96', 'name_ar' => 'الهند', 'name_fr' => 'Inde', 'name_en' => 'India', 'code' => 'in',
                'phone_code' => '+91',
                'currency' => 'INR',
            ],

            [
                'id' => '97', 'name_ar' => 'العراق', 'name_fr' => 'Irak', 'name_en' => 'Iraq', 'code' => 'iq',
                'phone_code' => '+964',
                'currency' => 'IQD',
            ],

            [
                'id' => '98', 'name_ar' => 'إيران', 'name_fr' => 'Iran', 'name_en' => 'Iran', 'code' => 'ir',
                'phone_code' => '+98',
                'currency' => 'IRR',
            ],

            [
                'id' => '99', 'name_ar' => 'أيسلندا', 'name_fr' => 'Islande', 'name_en' => 'Iceland', 'code' => 'is',
                'phone_code' => '+354',
                'currency' => 'ISK',
            ],

            [
                'id' => '100', 'name_ar' => 'إيطاليا', 'name_fr' => 'Italie', 'name_en' => 'Italy', 'code' => 'it',
                'phone_code' => '+39',
                'currency' => 'EUR',
            ],

            [
                'id' => '101', 'name_ar' => 'جامايكا', 'name_fr' => 'Jamaïque', 'name_en' => 'Jamaica', 'code' => 'jm',
                'phone_code' => '+1876',
                'currency' => 'JMD',
            ],

            [
                'id' => '102', 'name_ar' => 'الأردن', 'name_fr' => 'Jordan', 'name_en' => 'Jordan', 'code' => 'jo',
                'phone_code' => '+962',
                'currency' => 'JOD',
            ],

            [
                'id' => '103', 'name_ar' => 'اليابان', 'name_fr' => 'Japon', 'name_en' => 'Japan', 'code' => 'jp',
                'phone_code' => '+81',
                'currency' => 'JPY',
            ],

            [
                'id' => '104', 'name_ar' => 'كينيا', 'name_fr' => 'Kenya', 'name_en' => 'Kenya', 'code' => 'ke',
                'phone_code' => '+254',
                'currency' => 'KES',
            ],

            [
                'id' => '105', 'name_ar' => 'قرغيزستان', 'name_fr' => 'Kirghizistan', 'name_en' => 'Kyrgyzstan', 'code' => 'kg',
                'phone_code' => '+996',
                'currency' => 'KGS',
            ],

            [
                'id' => '106', 'name_ar' => 'كمبوديا', 'name_fr' => 'Cambodge', 'name_en' => 'Cambodia', 'code' => 'kh',
                'phone_code' => '+855',
                'currency' => 'KHR',
            ],

            [
                'id' => '107', 'name_ar' => 'كيريباس', 'name_fr' => 'Kiribati', 'name_en' => 'Kiribati', 'code' => 'ki',
                'phone_code' => '+686',
                'currency' => 'AUD',
            ],

            [
                'id' => '108', 'name_ar' => 'جزر القمر', 'name_fr' => 'Comores', 'name_en' => 'Comoros', 'code' => 'km',
                'phone_code' => '+269',
                'currency' => 'KMF',
            ],

            [
                'id' => '109', 'name_ar' => 'سانت كيتس ونيفيس', 'name_fr' => 'Saint-Christophe-et-Niévès', 'name_en' => 'Saint Kitts and Nevis', 'code' => 'kn',
                'phone_code' => '+1869',
                'currency' => 'XCD',
            ],

            [
                'id' => '110', 'name_ar' => 'كوريا الشمالية', 'name_fr' => 'Corée du Nord', 'name_en' => 'Korea (North)', 'code' => 'kp',
                'phone_code' => '+850',
                'currency' => 'KPW',
            ],

            [
                'id' => '111', 'name_ar' => 'كوريا', 'name_fr' => 'COREE DU SUD)', 'name_en' => 'Korea (South)', 'code' => 'kr',
                'phone_code' => '+82',
                'currency' => 'KRW',
            ],

            [
                'id' => '112', 'name_ar' => 'الكويت', 'name_fr' => 'Koweit', 'name_en' => 'Kuwait', 'code' => 'kw',
                'phone_code' => '+965',
                'currency' => 'KWD',
            ],

            [
                'id' => '113', 'name_ar' => 'جزر كايمان', 'name_fr' => 'Îles Caïmans', 'name_en' => 'Cayman Islands', 'code' => 'ky',
                'phone_code' => '+1345',
                'currency' => 'KYD',
            ],

            [
                'id' => '114', 'name_ar' => 'كازاخستان', 'name_fr' => 'Le kazakhstan', 'name_en' => 'Kazakhstan', 'code' => 'kz',
                'phone_code' => '+7',
                'currency' => 'KZT',
            ],

            [
                'id' => '115', 'name_ar' => 'لاوس', 'name_fr' => 'Laos', 'name_en' => 'Laos', 'code' => 'la',
                'phone_code' => '+856',
                'currency' => 'LAK',
            ],

            [
                'id' => '116', 'name_ar' => 'لبنان', 'name_fr' => 'Liban', 'name_en' => 'Lebanon', 'code' => 'lb',
                'phone_code' => '+961',
                'currency' => 'LBP',
            ],

            [
                'id' => '117', 'name_ar' => 'القديسة لوسيا', 'name_fr' => 'Sainte-Lucie', 'name_en' => 'Saint Lucia', 'code' => 'lc',
                'phone_code' => '+1758',
                'currency' => 'XCD',
            ],

            [
                'id' => '118', 'name_ar' => 'ليختنشتاين', 'name_fr' => 'Le Liechtenstein', 'name_en' => 'Liechtenstein', 'code' => 'li',
                'phone_code' => '+423',
                'currency' => 'CHF',
            ],

            [
                'id' => '119', 'name_ar' => 'سيريلانكا', 'name_fr' => 'Sri Lanka', 'name_en' => 'Sri Lanka', 'code' => 'lk',
                'phone_code' => '+94',
                'currency' => 'LKR',
            ],

            [
                'id' => '120', 'name_ar' => 'ليبيريا', 'name_fr' => 'Libéria', 'name_en' => 'Liberia', 'code' => 'lr',
                'phone_code' => '+231',
                'currency' => 'LRD',
            ],

            [
                'id' => '121', 'name_ar' => 'ليسوتو', 'name_fr' => 'Lesotho', 'name_en' => 'Lesotho', 'code' => 'ls',
                'phone_code' => '+266',
                'currency' => 'LSL',
            ],

            [
                'id' => '122', 'name_ar' => 'ليتوانيا', 'name_fr' => 'Lituanie', 'name_en' => 'Lithuania', 'code' => 'lt',
                'phone_code' => '+370',
                'currency' => 'LTL',
            ],

            [
                'id' => '123', 'name_ar' => 'لوكسمبورغ', 'name_fr' => 'Luxembourg', 'name_en' => 'Luxembourg', 'code' => 'lu',
                'phone_code' => '+352',
                'currency' => 'EUR',
            ],

            [
                'id' => '124', 'name_ar' => 'لاتفيا', 'name_fr' => 'Lettonie', 'name_en' => 'Latvia', 'code' => 'lv',
                'phone_code' => '+371',
                'currency' => 'EUR',
            ],

            [
                'id' => '125', 'name_ar' => 'ليبيا', 'name_fr' => 'Libye', 'name_en' => 'Libya', 'code' => 'ly',
                'phone_code' => '+218',
                'currency' => 'LYD',
            ],

            [
                'id' => '126', 'name_ar' => 'المغرب', 'name_fr' => 'Maroc', 'name_en' => 'Morocco', 'code' => 'ma',
                'phone_code' => '+212',
                'currency' => 'MAD',
            ],

            [
                'id' => '127', 'name_ar' => 'موناكو', 'name_fr' => 'Monaco', 'name_en' => 'Monaco', 'code' => 'mc',
                'phone_code' => '+377',
                'currency' => 'EUR',
            ],

            [
                'id' => '128', 'name_ar' => 'مولدوفا', 'name_fr' => 'La Moldavie', 'name_en' => 'Moldova', 'code' => 'md',
                'phone_code' => '+373',
                'currency' => 'MDL',
            ],

            [
                'id' => '129', 'name_ar' => 'مدغشقر', 'name_fr' => 'Madagascar', 'name_en' => 'Madagascar', 'code' => 'mg',
                'phone_code' => '+261',
                'currency' => 'MGA',
            ],

            [
                'id' => '130', 'name_ar' => 'جزر مارشال', 'name_fr' => 'Iles Marshall', 'name_en' => 'Marshall Islands', 'code' => 'mh',
                'phone_code' => '+692',
                'currency' => 'USD',
            ],

            [
                'id' => '131', 'name_ar' => 'مقدونيا', 'name_fr' => 'Macédoine', 'name_en' => 'Macedonia', 'code' => 'mk',
                'phone_code' => '+389',
                'currency' => 'MKD',
            ],

            [
                'id' => '132', 'name_ar' => 'مالي', 'name_fr' => 'Mali', 'name_en' => 'Mali', 'code' => 'ml',
                'phone_code' => '+223',
                'currency' => 'XOF',
            ],

            [
                'id' => '133', 'name_ar' => 'ميانمار', 'name_fr' => 'Myanmar', 'name_en' => 'Myanmar', 'code' => 'mm',
                'phone_code' => '+95',
                'currency' => 'MMK',
            ],

            [
                'id' => '134', 'name_ar' => 'منغوليا', 'name_fr' => 'Mongolie', 'name_en' => 'Mongolia', 'code' => 'mn',
                'phone_code' => '+976',
                'currency' => 'MNT',
            ],

            [
                'id' => '135', 'name_ar' => 'ماكاو', 'name_fr' => 'Macao', 'name_en' => 'Macao', 'code' => 'mo',
                'phone_code' => '+853',
                'currency' => 'MOP',
            ],

            [
                'id' => '136', 'name_ar' => 'جزر مريانا الشمالية', 'name_fr' => 'Îles Mariannes du Nord', 'name_en' => 'Northern Mariana Islands', 'code' => 'mp',
                'phone_code' => '+1670',
                'currency' => 'USD',
            ],

            [
                'id' => '137', 'name_ar' => 'مارتينيك', 'name_fr' => 'Martinique', 'name_en' => 'Martinique', 'code' => 'mq',
                'phone_code' => '+596',
                'currency' => 'EUR',
            ],

            [
                'id' => '138', 'name_ar' => 'موريتانيا', 'name_fr' => 'Mauritanie', 'name_en' => 'Mauritania', 'code' => 'mr',
                'phone_code' => '+222',
                'currency' => 'MRO',
            ],

            [
                'id' => '139', 'name_ar' => 'مونتسيرات', 'name_fr' => 'Montserrat', 'name_en' => 'Montserrat', 'code' => 'ms',
                'phone_code' => '+1664',
                'currency' => 'XCD',
            ],

            [
                'id' => '140', 'name_ar' => 'مالطا', 'name_fr' => 'Malte', 'name_en' => 'Malta', 'code' => 'mt',
                'phone_code' => '+356',
                'currency' => 'EUR',
            ],

            [
                'id' => '141', 'name_ar' => 'موريشيوس', 'name_fr' => 'Maurice', 'name_en' => 'Mauritius', 'code' => 'mu',
                'phone_code' => '+230',
                'currency' => 'MUR',
            ],

            [
                'id' => '142', 'name_ar' => 'جزر المالديف', 'name_fr' => 'Maldives', 'name_en' => 'Maldives', 'code' => 'mv',
                'phone_code' => '+960',
                'currency' => 'MVR',
            ],

            [
                'id' => '143', 'name_ar' => 'مالاوي', 'name_fr' => 'Malawi', 'name_en' => 'Malawi', 'code' => 'mw',
                'phone_code' => '+265',
                'currency' => 'MWK',
            ],

            [
                'id' => '144', 'name_ar' => 'المكسيك', 'name_fr' => 'Mexique', 'name_en' => 'Mexico', 'code' => 'mx',
                'phone_code' => '+52',
                'currency' => 'MXN',
            ],

            [
                'id' => '145', 'name_ar' => 'ماليزيا', 'name_fr' => 'Malaisie', 'name_en' => 'Malaysia', 'code' => 'my',
                'phone_code' => '+60',
                'currency' => 'MYR',
            ],

            [
                'id' => '146', 'name_ar' => 'موزمبيق', 'name_fr' => 'Mozambique', 'name_en' => 'Mozambique', 'code' => 'mz',
                'phone_code' => '+258',
                'currency' => 'MZN',
            ],

            [
                'id' => '147', 'name_ar' => 'ناميبيا', 'name_fr' => 'Namibie', 'name_en' => 'Namibia', 'code' => 'na',
                'phone_code' => '+264',
                'currency' => 'NAD',
            ],

            [
                'id' => '148', 'name_ar' => 'كاليدونيا الجديدة', 'name_fr' => 'Nouvelle Calédonie', 'name_en' => 'New Caledonia', 'code' => 'nc',
                'phone_code' => '+687',
                'currency' => 'XPF',
            ],

            [
                'id' => '149', 'name_ar' => 'النيجر', 'name_fr' => 'Niger', 'name_en' => 'Niger', 'code' => 'ne',
                'phone_code' => '+227',
                'currency' => 'XOF',
            ],

            [
                'id' => '150', 'name_ar' => 'جزيرة نورفولك', 'name_fr' => 'l\'ile de Norfolk', 'name_en' => 'Norfolk Island', 'code' => 'nf',
                'phone_code' => '+672',
                'currency' => 'AUD',
            ],

            [
                'id' => '151', 'name_ar' => 'نيجيريا', 'name_fr' => 'Nigeria', 'name_en' => 'Nigeria', 'code' => 'ng',
                'phone_code' => '+234',
                'currency' => 'NGN',
            ],

            [
                'id' => '152', 'name_ar' => 'نيكاراغوا', 'name_fr' => 'Nicaragua', 'name_en' => 'Nicaragua', 'code' => 'ni',
                'phone_code' => '+505',
                'currency' => 'NIO',
            ],

            [
                'id' => '153', 'name_ar' => 'هولندا', 'name_fr' => 'Pays-Bas', 'name_en' => 'Netherlands', 'code' => 'nl',
                'phone_code' => '+31',
                'currency' => 'EUR',
            ],

            [
                'id' => '154', 'name_ar' => 'النرويج', 'name_fr' => 'Norvège', 'name_en' => 'Norway', 'code' => 'no',
                'phone_code' => '+47',
                'currency' => 'NOK',
            ],

            [
                'id' => '155', 'name_ar' => 'نيبال', 'name_fr' => 'Népal', 'name_en' => 'Nepal', 'code' => 'np',
                'phone_code' => '+977',
                'currency' => 'NPR',
            ],

            [
                'id' => '156', 'name_ar' => 'ناورو', 'name_fr' => 'Nauru', 'name_en' => 'Nauru', 'code' => 'nr',
                'phone_code' => '+674',
                'currency' => 'AUD',
            ],

            [
                'id' => '157', 'name_ar' => 'نيوي', 'name_fr' => 'Niue', 'name_en' => 'Niue', 'code' => 'nu',
                'phone_code' => '+683',
                'currency' => 'NZD',
            ],

            [
                'id' => '158', 'name_ar' => 'نيوزيلندا (اوتياروا)', 'name_fr' => 'Nouvelle-Zélande (Aotearoa)', 'name_en' => 'New Zealand (Aotearoa)', 'code' => 'nz',
                'phone_code' => '+64',
                'currency' => 'NZD',
            ],

            [
                'id' => '159', 'name_ar' => 'سلطنة عمان', 'name_fr' => 'Oman', 'name_en' => 'Oman', 'code' => 'om',
                'phone_code' => '+968',
                'currency' => 'OMR',
            ],

            [
                'id' => '160', 'name_ar' => 'بناما', 'name_fr' => 'Panama', 'name_en' => 'Panama', 'code' => 'pa',
                'phone_code' => '+507',
                'currency' => 'PAB',
            ],

            [
                'id' => '161', 'name_ar' => 'بيرو', 'name_fr' => 'Pérou', 'name_en' => 'Peru', 'code' => 'pe',
                'phone_code' => '+51',
                'currency' => 'PEN',
            ],

            [
                'id' => '162', 'name_ar' => 'بولينيزيا الفرنسية', 'name_fr' => 'Polynésie française', 'name_en' => 'French Polynesia', 'code' => 'pf',
                'phone_code' => '+689',
                'currency' => 'XPF',
            ],

            [
                'id' => '163', 'name_ar' => 'بابوا غينيا الجديدة', 'name_fr' => 'Papouasie Nouvelle Guinée', 'name_en' => 'Papua New Guinea', 'code' => 'pg',
                'phone_code' => '+675',
                'currency' => 'PGK',
            ],

            [
                'id' => '164', 'name_ar' => 'الفلبين', 'name_fr' => 'Philippines', 'name_en' => 'Philippines', 'code' => 'ph',
                'phone_code' => '+63',
                'currency' => 'PHP',
            ],

            [
                'id' => '165', 'name_ar' => 'باكستان', 'name_fr' => 'Pakistan', 'name_en' => 'Pakistan', 'code' => 'pk',
                'phone_code' => '+92',
                'currency' => 'PKR',
            ],

            [
                'id' => '166', 'name_ar' => 'بولندا', 'name_fr' => 'Pologne', 'name_en' => 'Poland', 'code' => 'pl',
                'phone_code' => '+48',
                'currency' => 'PLN',
            ],

            [
                'id' => '167', 'name_ar' => 'سانت بيير وميكلون', 'name_fr' => 'Saint Pierre et Miquelon', 'name_en' => 'Saint Pierre and Miquelon', 'code' => 'pm',
                'phone_code' => '+508',
                'currency' => 'EUR',
            ],

            [
                'id' => '168', 'name_ar' => 'بيتكيرن', 'name_fr' => 'Pitcairn', 'name_en' => 'Pitcairn', 'code' => 'pn',
                'phone_code' => '+870',
                'currency' => 'NZD',
            ],

            [
                'id' => '169', 'name_ar' => 'فلسطين', 'name_fr' => 'Palestinien', 'name_en' => 'Palestinian', 'code' => 'ps',
                'phone_code' => '+970',
                'currency' => 'ILS',
            ],

            [
                'id' => '170', 'name_ar' => 'البرتغال', 'name_fr' => 'le Portugal', 'name_en' => 'Portugal', 'code' => 'pt',
                'phone_code' => '+351',
                'currency' => 'EUR',
            ],

            [
                'id' => '171', 'name_ar' => 'بالاو', 'name_fr' => 'Palau', 'name_en' => 'Palau', 'code' => 'pw',
                'phone_code' => '+680',
                'currency' => 'USD',
            ],

            [
                'id' => '172', 'name_ar' => 'باراغواي', 'name_fr' => 'Paraguay', 'name_en' => 'Paraguay', 'code' => 'py',
                'phone_code' => '+595',
                'currency' => 'PYG',
            ],

            [
                'id' => '173', 'name_ar' => 'دولة قطر', 'name_fr' => 'Qatar', 'name_en' => 'Qatar', 'code' => 'qa',
                'phone_code' => '+974',
                'currency' => 'QAR',
            ],

            [
                'id' => '174', 'name_ar' => 'جمع شمل', 'name_fr' => 'Réunion', 'name_en' => 'Reunion', 'code' => 're',
                'phone_code' => '+262',
                'currency' => 'EUR',
            ],

            [
                'id' => '175', 'name_ar' => 'رومانيا', 'name_fr' => 'Roumanie', 'name_en' => 'Romania', 'code' => 'ro',
                'phone_code' => '+40',
                'currency' => 'RON',
            ],

            [
                'id' => '176', 'name_ar' => 'روسيا', 'name_fr' => 'Russie', 'name_en' => 'Russia', 'code' => 'ru',
                'phone_code' => '+7',
                'currency' => 'RUB',
            ],

            [
                'id' => '177', 'name_ar' => 'رواندا', 'name_fr' => 'Rwanda', 'name_en' => 'Rwanda', 'code' => 'rw',
                'phone_code' => '+250',
                'currency' => 'RWF',
            ],

            [
                'id' => '178', 'name_ar' => 'أندورا', 'name_fr' => 'Andorre', 'name_en' => 'Andorra', 'code' => 'ad',
                'phone_code' => '+376',
                'currency' => 'EUR',
            ],

            [
                'id' => '179', 'name_ar' => 'جزر سليمان', 'name_fr' => 'Les îles Salomon', 'name_en' => 'Solomon Islands', 'code' => 'sb',
                'phone_code' => '+677',
                'currency' => 'SBD',
            ],

            [
                'id' => '180', 'name_ar' => 'سيشيل', 'name_fr' => 'les Seychelles', 'name_en' => 'Seychelles', 'code' => 'sc',
                'phone_code' => '+248',
                'currency' => 'SCR',
            ],

            [
                'id' => '181', 'name_ar' => 'سودان', 'name_fr' => 'Soudan', 'name_en' => 'Sudan', 'code' => 'sd',
                'phone_code' => '+249',
                'currency' => 'SDG',
            ],

            [
                'id' => '182', 'name_ar' => 'السويد', 'name_fr' => 'Suède', 'name_en' => 'Sweden', 'code' => 'se',
                'phone_code' => '+46',
                'currency' => 'SEK',
            ],

            [
                'id' => '183', 'name_ar' => 'سنغافورة', 'name_fr' => 'Singapour', 'name_en' => 'Singapore', 'code' => 'sg',
                'phone_code' => '+65',
                'currency' => 'SGD',
            ],

            [
                'id' => '184', 'name_ar' => 'سانت هيلانة', 'name_fr' => 'Sainte Hélène', 'name_en' => 'Saint Helena', 'code' => 'sh',
                'phone_code' => '+290',
                'currency' => 'GBP',
            ],

            [
                'id' => '185', 'name_ar' => 'سلوفينيا', 'name_fr' => 'La slovénie', 'name_en' => 'Slovenia', 'code' => 'si',
                'phone_code' => '+386',
                'currency' => 'EUR',
            ],

            [
                'id' => '186', 'name_ar' => 'لا شيء', 'name_fr' => 'NUL', 'name_en' => 'NULL', 'code' => 'gg',
                'phone_code' => 'null',
                'currency' => 'null',
            ],

            [
                'id' => '187', 'name_ar' => 'سلوفاكيا', 'name_fr' => 'La slovaquie', 'name_en' => 'Slovakia', 'code' => 'sk',
                'phone_code' => '+421',
                'currency' => 'EUR',
            ],

            [
                'id' => '188', 'name_ar' => 'سيرا ليون', 'name_fr' => 'Sierra Leone', 'name_en' => 'Sierra Leone', 'code' => 'sl',
                'phone_code' => '+232',
                'currency' => 'SLL',
            ],

            [
                'id' => '189', 'name_ar' => 'سان مارينو', 'name_fr' => 'Saint Marin', 'name_en' => 'San Marino', 'code' => 'sm',
                'phone_code' => '+378',
                'currency' => 'EUR',
            ],

            [
                'id' => '190', 'name_ar' => 'السنغال', 'name_fr' => 'Sénégal', 'name_en' => 'Senegal', 'code' => 'sn',
                'phone_code' => '+221',
                'currency' => 'XOF',
            ],

            [
                'id' => '191', 'name_ar' => 'الصومال', 'name_fr' => 'Somalie', 'name_en' => 'Somalia', 'code' => 'so',
                'phone_code' => '+252',
                'currency' => 'SOS',
            ],

            [
                'id' => '192', 'name_ar' => 'سورينام', 'name_fr' => 'Suriname', 'name_en' => 'Suriname', 'code' => 'sr',
                'phone_code' => '+597',
                'currency' => 'SRD',
            ],

            [
                'id' => '193', 'name_ar' => 'ساو تومي وبرنسيبي', 'name_fr' => 'Sao Tomé et Principe', 'name_en' => 'Sao Tome and Principe', 'code' => 'st',
                'phone_code' => '+239',
                'currency' => 'STD',
            ],

            [
                'id' => '194', 'name_ar' => 'السلفادور', 'name_fr' => 'Le Salvador', 'name_en' => 'El Salvador', 'code' => 'sv',
                'phone_code' => '+503',
                'currency' => 'USD',
            ],

            [
                'id' => '195', 'name_ar' => 'سوريا', 'name_fr' => 'Syrie', 'name_en' => 'Syria', 'code' => 'sy',
                'phone_code' => '+963',
                'currency' => 'SYP',
            ],

            [
                'id' => '196', 'name_ar' => 'سوازيلاند', 'name_fr' => 'Swaziland', 'name_en' => 'Swaziland', 'code' => 'sz',
                'phone_code' => '+268',
                'currency' => 'SZL',
            ],

            [
                'id' => '197', 'name_ar' => 'جزر تركس وكايكوس', 'name_fr' => 'îles Turques-et-Caïques', 'name_en' => 'Turks and Caicos Islands', 'code' => 'tc',
                'phone_code' => '+1649',
                'currency' => 'USD',
            ],

            [
                'id' => '198', 'name_ar' => 'تشاد', 'name_fr' => 'Le tchad', 'name_en' => 'Chad', 'code' => 'td',
                'phone_code' => '+235',
                'currency' => 'XAF',
            ],

            [
                'id' => '199', 'name_ar' => 'لا شيء', 'name_fr' => 'NUL', 'name_en' => 'NULL', 'code' => 'gg',
                'phone_code' => 'null',
                'currency' => 'null',
            ],

            [
                'id' => '200', 'name_ar' => 'ليذهب', 'name_fr' => 'Aller', 'name_en' => 'Togo', 'code' => 'tg',
                'phone_code' => '+228',
                'currency' => 'XOF',
            ],

            [
                'id' => '201', 'name_ar' => 'تايلاند', 'name_fr' => 'Thaïlande', 'name_en' => 'Thailand', 'code' => 'th',
                'phone_code' => '+66',
                'currency' => 'THB',
            ],

            [
                'id' => '202', 'name_ar' => 'طاجيكستان', 'name_fr' => 'Tadjikistan', 'name_en' => 'Tajikistan', 'code' => 'tj',
                'phone_code' => '+992',
                'currency' => 'TJS',
            ],

            [
                'id' => '203', 'name_ar' => 'توكيلاو', 'name_fr' => 'Tokelau', 'name_en' => 'Tokelau', 'code' => 'tk',
                'phone_code' => '+690',
                'currency' => 'NZD',
            ],

            [
                'id' => '204', 'name_ar' => 'تركمانستان', 'name_fr' => 'Turkménistan', 'name_en' => 'Turkmenistan', 'code' => 'tm',
                'phone_code' => '+993',
                'currency' => 'TMT',
            ],

            [
                'id' => '205', 'name_ar' => 'تونس', 'name_fr' => 'Tunisie', 'name_en' => 'Tunisia', 'code' => 'tn',
                'phone_code' => '+216',
                'currency' => 'TND',
            ],

            [
                'id' => '206', 'name_ar' => 'تونغا', 'name_fr' => 'Tonga', 'name_en' => 'Tonga', 'code' => 'to',
                'phone_code' => '+676',
                'currency' => 'TOP',
            ],

            [
                'id' => '207', 'name_ar' => 'تركيا', 'name_fr' => 'Turquie', 'name_en' => 'Turkey', 'code' => 'tr',
                'phone_code' => '+90',
                'currency' => 'TRY',
            ],

            [
                'id' => '208', 'name_ar' => 'ترينداد وتوباغو', 'name_fr' => 'Trinité-et-Tobago', 'name_en' => 'Trinidad and Tobago', 'code' => 'tt',
                'phone_code' => '+1868',
                'currency' => 'TTD',
            ],

            [
                'id' => '209', 'name_ar' => 'توفالو', 'name_fr' => 'Tuvalu', 'name_en' => 'Tuvalu', 'code' => 'tv',
                'phone_code' => '+688',
                'currency' => 'TVD',
            ],

            [
                'id' => '210', 'name_ar' => 'تايوان', 'name_fr' => 'Taïwan', 'name_en' => 'Taiwan', 'code' => 'tw',
                'phone_code' => '+886',
                'currency' => 'TWD',
            ],

            [
                'id' => '211', 'name_ar' => 'تنزانيا', 'name_fr' => 'Tanzanie', 'name_en' => 'Tanzania', 'code' => 'tz',
                'phone_code' => '+255',
                'currency' => 'TZS',
            ],

            [
                'id' => '212', 'name_ar' => 'أوكرانيا', 'name_fr' => 'Ukraine', 'name_en' => 'Ukraine', 'code' => 'ua',
                'phone_code' => '+380',
                'currency' => 'UAH',
            ],

            [
                'id' => '213', 'name_ar' => 'أوغندا', 'name_fr' => 'Ouganda', 'name_en' => 'Uganda', 'code' => 'ug',
                'phone_code' => '+256',
                'currency' => 'UGX',
            ],

            [
                'id' => '214', 'name_ar' => 'أوروغواي', 'name_fr' => 'Uruguay', 'name_en' => 'Uruguay', 'code' => 'uy',
                'phone_code' => '+598',
                'currency' => 'UYU',
            ],

            [
                'id' => '215', 'name_ar' => 'أوزبكستان', 'name_fr' => 'Ouzbékistan', 'name_en' => 'Uzbekistan', 'code' => 'uz',
                'phone_code' => '+998',
                'currency' => 'UZS',
            ],

            [
                'id' => '216', 'name_ar' => 'سانت فنسنت وجزر غرينادين', 'name_fr' => 'Saint-Vincent-et-les-Grenadines', 'name_en' => 'Saint Vincent and the Grenadines', 'code' => 'vc',
                'phone_code' => '+1784',
                'currency' => 'XCD',
            ],

            [
                'id' => '217', 'name_ar' => 'فنزويلا', 'name_fr' => 'Venezuela', 'name_en' => 'Venezuela', 'code' => 've',
                'phone_code' => '+58',
                'currency' => 'VES',
            ],

            [
                'id' => '218', 'name_ar' => 'جزر العذراء البريطانية', 'name_fr' => 'Îles vierges britanniques', 'name_en' => 'Virgin Islands (British)', 'code' => 'vg',
                'phone_code' => '+0000',
                'currency' => 'null',
            ],

            [
                'id' => '219', 'name_ar' => 'جزر فيرجن (الولايات المتحدة)', 'name_fr' => 'Îles Vierges (États-Unis)', 'name_en' => 'Virgin Islands (U.S.)', 'code' => 'vi',
                'phone_code' => '+1340',
                'currency' => 'USD',
            ],

            [
                'id' => '220', 'name_ar' => 'فيتنام', 'name_fr' => 'Viet Nam', 'name_en' => 'Viet Nam', 'code' => 'vn',
                'phone_code' => '+84',
                'currency' => 'VND',
            ],

            [
                'id' => '221', 'name_ar' => 'فانواتو', 'name_fr' => 'Vanuatu', 'name_en' => 'Vanuatu', 'code' => 'vu',
                'phone_code' => '+678',
                'currency' => 'VUV',
            ],

            [
                'id' => '222', 'name_ar' => 'واليس وفوتونا', 'name_fr' => 'Wallis et Futuna', 'name_en' => 'Wallis and Futuna', 'code' => 'wf',
                'phone_code' => '+681',
                'currency' => 'XPF',
            ],

            [
                'id' => '223', 'name_ar' => 'ساموا', 'name_fr' => 'Samoa', 'name_en' => 'Samoa', 'code' => 'ws',
                'phone_code' => '+685',
                'currency' => 'WST',
            ],

            [
                'id' => '224', 'name_ar' => 'اليمن', 'name_fr' => 'Yémen', 'name_en' => 'Yemen', 'code' => 'ye',
                'phone_code' => '+967',
                'currency' => 'YER',
            ],

            [
                'id' => '225', 'name_ar' => 'مايوت', 'name_fr' => 'Mayotte', 'name_en' => 'Mayotte', 'code' => 'yt',
                'phone_code' => '+262',
                'currency' => 'EUR',
            ],

            [
                'id' => '226', 'name_ar' => 'جنوب أفريقيا', 'name_fr' => 'Afrique du Sud', 'name_en' => 'South Africa', 'code' => 'za',
                'phone_code' => '+27',
                'currency' => 'ZAR',
            ],

            [
                'id' => '227', 'name_ar' => 'زامبيا', 'name_fr' => 'Zambie', 'name_en' => 'Zambia', 'code' => 'zm',
                'phone_code' => '+260',
                'currency' => 'MWK',
            ],

            [
                'id' => '228', 'name_ar' => 'زائير (سابقة)', 'name_fr' => 'Zaïre (ancien)', 'name_en' => 'Zaire (former)', 'code' => 'zr',
                'phone_code' => 'null',
                'currency' => 'CDF',
            ],

            [
                'id' => '229', 'name_ar' => 'زيمبابوي', 'name_fr' => 'Zimbabwe', 'name_en' => 'Zimbabwe', 'code' => 'zw',
                'phone_code' => '+263',
                'currency' => 'USD',
            ],

            [
                'id' => '230', 'name_ar' => 'الولايات المتحدة', 'name_fr' => 'les États-Unis d\'Amérique', 'name_en' => 'United States of America', 'code' => 'us',
                'phone_code' => '+1',
                'currency' => 'USD',
            ],

            [
                'id' => '231', 'name_ar' => 'غير معروف', 'name_fr' => 'unknown', 'name_en' => 'unknown', 'code' => 'null',
                'phone_code' => 'null',
                'currency' => 'null',
            ],
        ];

        DB::table('countries')->insert($countries);
    }
}
