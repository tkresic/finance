<?php

namespace Database\Seeders;

use App\Models\Bill;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class BillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 22 bills in a JSON
        $data = '[{"payment_method_id":1,"restored_bill_id":null,"user":{"id":1,"username":"tkresic","name":"Toni","surname":"Kre\u0161i\u0107","email":"tonikresic1997@gmail.com","role":{"id":1,"name":"Admin"}},"branch":{"id":1,"name":"Zagreb Centar","businessPlaceLabel":1,"address":"Ulica Ivana Mihovila 12","phone":"01 295 186222","createdAt":"2021-06-15T15:33:34.244","updatedAt":"2021-06-18T11:04:29.725"},"products":[{"id":9,"subcategoryId":1,"subcategory":{"id":1,"categoryId":1,"category":{"id":1,"name":"Hrana"},"name":"Predjelo"},"tax":{"id":1,"name":"PDV 25%","amount":25,"total":null},"name":"Ra\u017enji\u0107i od gambera","price":2850,"cost":0,"quantity":1,"image":"http://admin.requiro.info/storage/images\/RaznjiciOdGambera.png"}],"number":22,"business_place_label":1,"cash_register_label":1,"label":"1-1-22","gross":2850,"net":2137,"taxes":[{"id":1,"name":"PDV 25%","amount":25,"total":713}],"restoring_reason":null},{"payment_method_id":1,"restored_bill_id":null,"user":{"id":1,"username":"tkresic","name":"Toni","surname":"Kre\u0161i\u0107","email":"tonikresic1997@gmail.com","role":{"id":1,"name":"Admin"}},"branch":{"id":1,"name":"Zagreb Centar","businessPlaceLabel":1,"address":"Ulica Ivana Mihovila 12","phone":"01 295 186222","createdAt":"2021-06-15T15:33:34.244","updatedAt":"2021-06-18T11:04:29.725"},"products":[{"id":4,"subcategoryId":1,"subcategory":{"id":1,"categoryId":1,"category":{"id":1,"name":"Hrana"},"name":"Predjelo"},"tax":{"id":2,"name":"PDV 10%","amount":10,"total":null},"name":"Pr\u0161ut dalmatinski","price":3750,"cost":0,"quantity":1,"image":"http://admin.requiro.info/storage/images\/PrsutDalmatinski.png"},{"id":8,"subcategoryId":1,"subcategory":{"id":1,"categoryId":1,"category":{"id":1,"name":"Hrana"},"name":"Predjelo"},"tax":{"id":2,"name":"PDV 10%","amount":10,"total":null},"name":"Salata od hobotnice","price":5150,"cost":0,"quantity":1,"image":"http://admin.requiro.info/storage/images\/SalataOdHobotnice.png"},{"id":11,"subcategoryId":1,"subcategory":{"id":1,"categoryId":1,"category":{"id":1,"name":"Hrana"},"name":"Predjelo"},"tax":{"id":1,"name":"PDV 25%","amount":25,"total":null},"name":"Proljetne rolice","price":2250,"cost":0,"quantity":1,"image":"http://admin.requiro.info/storage/images\/ProljetneRolice.png"}],"number":21,"business_place_label":1,"cash_register_label":1,"label":"1-1-21","gross":11150,"net":9697,"taxes":[{"id":2,"name":"PDV 10%","amount":10,"total":890},{"id":1,"name":"PDV 25%","amount":25,"total":563}],"restoring_reason":null},{"payment_method_id":1,"restored_bill_id":1,"user":{"id":1,"username":"tkresic","name":"Toni","surname":"Kre\u0161i\u0107","email":"tonikresic1997@gmail.com","role":{"id":1,"name":"Admin"}},"branch":{"id":1,"name":"Zagreb Centar","businessPlaceLabel":1,"address":"Ulica Ivana Mihovila 12","phone":"01 295 186222","createdAt":"2021-06-15T15:33:34.244","updatedAt":"2021-06-18T11:04:29.725"},"products":[{"id":9,"subcategoryId":1,"subcategory":{"id":1,"categoryId":1,"category":{"id":1,"name":"Hrana"},"name":"Predjelo"},"tax":{"id":1,"name":"PDV 25%","amount":25,"total":null},"name":"Ra\u017enji\u0107i od gambera","price":-2850,"cost":0,"quantity":1,"image":"http://admin.requiro.info/storage/images\/RaznjiciOdGambera.png"}],"number":20,"business_place_label":1,"cash_register_label":1,"label":"1-1-20","gross":-2850,"net":-2137,"taxes":[{"id":1,"name":"PDV 25%","amount":25,"total":-713}],"restoring_reason":"test"},{"payment_method_id":1,"restored_bill_id":2,"user":{"id":1,"username":"tkresic","name":"Toni","surname":"Kre\u0161i\u0107","email":"tonikresic1997@gmail.com","role":{"id":1,"name":"Admin"}},"branch":{"id":1,"name":"Zagreb Centar","businessPlaceLabel":1,"address":"Ulica Ivana Mihovila 12","phone":"01 295 186222","createdAt":"2021-06-15T15:33:34.244","updatedAt":"2021-06-18T11:04:29.725"},"products":[{"id":4,"subcategoryId":1,"subcategory":{"id":1,"categoryId":1,"category":{"id":1,"name":"Hrana"},"name":"Predjelo"},"tax":{"id":2,"name":"PDV 10%","amount":10,"total":null},"name":"Pr\u0161ut dalmatinski","price":-3750,"cost":0,"quantity":1,"image":"http://admin.requiro.info/storage/images\/PrsutDalmatinski.png"},{"id":8,"subcategoryId":1,"subcategory":{"id":1,"categoryId":1,"category":{"id":1,"name":"Hrana"},"name":"Predjelo"},"tax":{"id":2,"name":"PDV 10%","amount":10,"total":null},"name":"Salata od hobotnice","price":-5150,"cost":0,"quantity":1,"image":"http://admin.requiro.info/storage/images\/SalataOdHobotnice.png"},{"id":11,"subcategoryId":1,"subcategory":{"id":1,"categoryId":1,"category":{"id":1,"name":"Hrana"},"name":"Predjelo"},"tax":{"id":1,"name":"PDV 25%","amount":25,"total":null},"name":"Proljetne rolice","price":-2250,"cost":0,"quantity":1,"image":"http://admin.requiro.info/storage/images\/ProljetneRolice.png"}],"number":19,"business_place_label":1,"cash_register_label":1,"label":"1-1-19","gross":-11150,"net":-9697,"taxes":[{"id":2,"name":"PDV 10%","amount":10,"total":-890},{"id":1,"name":"PDV 25%","amount":25,"total":-563}],"restoring_reason":"test"},{"payment_method_id":1,"restored_bill_id":null,"user":{"id":1,"username":"tkresic","name":"Toni","surname":"Kre\u0161i\u0107","email":"tonikresic1997@gmail.com","role":{"id":1,"name":"Administrator"}},"branch":{"id":1,"name":"Zagreb Centar","businessPlaceLabel":1,"address":"Ulica Ivana Mihovila 12","phone":"01 295 18622","createdAt":"2021-06-15T15:33:34.244","updatedAt":"2021-06-21T11:46:42.658"},"products":[{"id":11,"subcategoryId":1,"subcategory":{"id":1,"categoryId":1,"category":{"id":1,"name":"Hrana"},"name":"Predjelo"},"tax":{"id":1,"name":"PDV 25%","amount":25,"total":null},"name":"Proljetne rolice","price":2250,"cost":0,"quantity":1,"image":"http://admin.requiro.info/storage/images\/ProljetneRolice.png"},{"id":5,"subcategoryId":1,"subcategory":{"id":1,"categoryId":1,"category":{"id":1,"name":"Hrana"},"name":"Predjelo"},"tax":{"id":1,"name":"PDV 25%","amount":25,"total":null},"name":"Slavonski kulen 100g","price":2850,"cost":0,"quantity":1,"image":"http://admin.requiro.info/storage/images\/SlavonskiKulen.png"}],"number":18,"business_place_label":1,"cash_register_label":1,"label":"1-1-18","gross":5100,"net":3824,"taxes":[{"id":1,"name":"PDV 25%","amount":25,"total":1276}],"restoring_reason":null},{"payment_method_id":1,"restored_bill_id":null,"user":{"id":1,"username":"tkresic","name":"Toni","surname":"Kre\u0161i\u0107","email":"tonikresic1997@gmail.com","role":{"id":1,"name":"Administrator"}},"branch":{"id":1,"name":"Zagreb Centar","businessPlaceLabel":1,"address":"Ulica Ante Star\u010devi\u0107a 152","phone":"01 116 2217","createdAt":"2021-06-21T22:46:08.944","updatedAt":"2021-06-21T22:46:08.944"},"products":[{"id":6,"subcategoryId":1,"subcategory":{"id":1,"categoryId":1,"category":{"id":1,"name":"Hrana"},"name":"Predjelo"},"tax":{"id":2,"name":"PDV 10%","amount":10,"total":null},"name":"Pa\u0161ki sir","price":3150,"cost":0,"quantity":1,"image":"http://admin.requiro.info/storage/images\/PaskiSir.png"},{"id":9,"subcategoryId":1,"subcategory":{"id":1,"categoryId":1,"category":{"id":1,"name":"Hrana"},"name":"Predjelo"},"tax":{"id":1,"name":"PDV 25%","amount":25,"total":null},"name":"Ra\u017enji\u0107i od gambera","price":2850,"cost":0,"quantity":2,"image":"http://admin.requiro.info/storage/images\/RaznjiciOdGambera.png"},{"id":12,"subcategoryId":1,"subcategory":{"id":1,"categoryId":1,"category":{"id":1,"name":"Hrana"},"name":"Predjelo"},"tax":{"id":2,"name":"PDV 10%","amount":10,"total":null},"name":"Pohani tofu","price":2750,"cost":0,"quantity":1,"image":"http://admin.requiro.info/storage/images\/PohaniTofu.png"}],"number":17,"business_place_label":1,"cash_register_label":1,"label":"1-1-17","gross":11600,"net":9585,"taxes":[{"id":2,"name":"PDV 10%","amount":10,"total":590},{"id":1,"name":"PDV 25%","amount":25,"total":1425}],"restoring_reason":null},{"payment_method_id":1,"restored_bill_id":null,"user":{"id":1,"username":"tkresic","name":"Toni","surname":"Kre\u0161i\u0107","email":"tonikresic1997@gmail.com","role":{"id":1,"name":"Administrator"}},"branch":{"id":1,"name":"Zagreb Centar","businessPlaceLabel":1,"address":"Ulica Ante Star\u010devi\u0107a 152","phone":"01 116 2217","createdAt":"2021-06-21T22:46:08.944","updatedAt":"2021-06-21T22:46:08.944"},"products":[{"id":54,"subcategoryId":4,"subcategory":{"id":4,"categoryId":1,"category":{"id":1,"name":"Hrana"},"name":"Desert"},"tax":{"id":2,"name":"PDV 10%","amount":10,"total":null},"name":"Vo\u0107ni kup","price":3600,"cost":0,"quantity":1,"image":"http://admin.requiro.info/storage/images\/VocniKup.png"},{"id":32,"subcategoryId":3,"subcategory":{"id":3,"categoryId":1,"category":{"id":1,"name":"Hrana"},"name":"Glavno jelo"},"tax":{"id":2,"name":"PDV 10%","amount":10,"total":null},"name":"Lignje na \u017earu","price":4500,"cost":0,"quantity":1,"image":"http://admin.requiro.info/storage/images\/LignjeNaZaru.png"},{"id":35,"subcategoryId":3,"subcategory":{"id":3,"categoryId":1,"category":{"id":1,"name":"Hrana"},"name":"Glavno jelo"},"tax":{"id":1,"name":"PDV 25%","amount":25,"total":null},"name":"Svinjski medaljoni","price":4000,"cost":0,"quantity":1,"image":"http://admin.requiro.info/storage/images\/SvinjskiMedaljoni.png"}],"number":16,"business_place_label":1,"cash_register_label":1,"label":"1-1-16","gross":12100,"net":10290,"taxes":[{"id":2,"name":"PDV 10%","amount":10,"total":810},{"id":1,"name":"PDV 25%","amount":25,"total":1000}],"restoring_reason":null},{"payment_method_id":1,"restored_bill_id":null,"user":{"id":1,"username":"tkresic","name":"Toni","surname":"Kre\u0161i\u0107","email":"tonikresic1997@gmail.com","role":{"id":1,"name":"Administrator"}},"branch":{"id":1,"name":"Zagreb Centar","businessPlaceLabel":1,"address":"Ulica Ante Star\u010devi\u0107a 152","phone":"01 116 2217","createdAt":"2021-06-21T22:46:08.944","updatedAt":"2021-06-21T22:46:08.944"},"products":[{"id":125,"subcategoryId":10,"subcategory":{"id":10,"categoryId":3,"category":{"id":3,"name":"Ostalo"},"name":"Cigarete"},"tax":{"id":1,"name":"PDV 25%","amount":25,"total":null},"name":"Dunhill","price":3100,"cost":0,"quantity":1,"image":"http://admin.requiro.info/storage/images\/Dunhill.png"},{"id":28,"subcategoryId":3,"subcategory":{"id":3,"categoryId":1,"category":{"id":1,"name":"Hrana"},"name":"Glavno jelo"},"tax":{"id":2,"name":"PDV 10%","amount":10,"total":null},"name":"Grill piletina","price":4700,"cost":0,"quantity":1,"image":"http://admin.requiro.info/storage/images\/GrillPiletina.png"},{"id":20,"subcategoryId":2,"subcategory":{"id":2,"categoryId":1,"category":{"id":1,"name":"Hrana"},"name":"Salate"},"tax":{"id":2,"name":"PDV 10%","amount":10,"total":null},"name":"Matovilac salata","price":2500,"cost":0,"quantity":1,"image":"http://admin.requiro.info/storage/images\/MatovilacSalata.png"}],"number":15,"business_place_label":1,"cash_register_label":1,"label":"1-1-15","gross":10300,"net":8805,"taxes":[{"id":1,"name":"PDV 25%","amount":25,"total":775},{"id":2,"name":"PDV 10%","amount":10,"total":720}],"restoring_reason":null},{"payment_method_id":1,"restored_bill_id":null,"user":{"id":1,"username":"tkresic","name":"Toni","surname":"Kre\u0161i\u0107","email":"tonikresic1997@gmail.com","role":{"id":1,"name":"Administrator"}},"branch":{"id":1,"name":"Zagreb Centar","businessPlaceLabel":1,"address":"Ulica Ante Star\u010devi\u0107a 152","phone":"01 116 2217","createdAt":"2021-06-21T22:46:08.944","updatedAt":"2021-06-21T22:46:08.944"},"products":[{"id":93,"subcategoryId":7,"subcategory":{"id":7,"categoryId":2,"category":{"id":2,"name":"Pi\u0107e"},"name":"Alkoholna pi\u0107a"},"tax":{"id":1,"name":"PDV 25%","amount":25,"total":null},"name":"Jack Daniels","price":2200,"cost":0,"quantity":1,"image":"http://admin.requiro.info/storage/images\/JackDaniels.png"},{"id":90,"subcategoryId":7,"subcategory":{"id":7,"categoryId":2,"category":{"id":2,"name":"Pi\u0107e"},"name":"Alkoholna pi\u0107a"},"tax":{"id":1,"name":"PDV 25%","amount":25,"total":null},"name":"Finlandia vodka","price":2000,"cost":0,"quantity":1,"image":"http://admin.requiro.info/storage/images\/FinlandiaVodka.png"},{"id":61,"subcategoryId":5,"subcategory":{"id":5,"categoryId":2,"category":{"id":2,"name":"Pi\u0107e"},"name":"Pive"},"tax":{"id":1,"name":"PDV 25%","amount":25,"total":null},"name":"Tomislav","price":1700,"cost":0,"quantity":1,"image":"http://admin.requiro.info/storage/images\/Tomislav.png"}],"number":14,"business_place_label":1,"cash_register_label":1,"label":"1-1-14","gross":5900,"net":4425,"taxes":[{"id":1,"name":"PDV 25%","amount":25,"total":1475}],"restoring_reason":null},{"payment_method_id":1,"restored_bill_id":null,"user":{"id":1,"username":"tkresic","name":"Toni","surname":"Kre\u0161i\u0107","email":"tonikresic1997@gmail.com","role":{"id":1,"name":"Administrator"}},"branch":{"id":1,"name":"Zagreb Centar","businessPlaceLabel":1,"address":"Ulica Ante Star\u010devi\u0107a 152","phone":"01 116 2217","createdAt":"2021-06-21T22:46:08.944","updatedAt":"2021-06-21T22:46:08.944"},"products":[{"id":107,"subcategoryId":8,"subcategory":{"id":8,"categoryId":2,"category":{"id":2,"name":"Pi\u0107e"},"name":"Bezalkoholna pi\u0107a"},"tax":{"id":1,"name":"PDV 25%","amount":25,"total":null},"name":"Orangina","price":1600,"cost":0,"quantity":1,"image":"http://admin.requiro.info/storage/images\/Orangina.png"},{"id":104,"subcategoryId":8,"subcategory":{"id":8,"categoryId":2,"category":{"id":2,"name":"Pi\u0107e"},"name":"Bezalkoholna pi\u0107a"},"tax":{"id":1,"name":"PDV 25%","amount":25,"total":null},"name":"Ledeni \u010daj","price":1400,"cost":0,"quantity":2,"image":"http://admin.requiro.info/storage/images\/LedeniCaj.png"}],"number":13,"business_place_label":1,"cash_register_label":1,"label":"1-1-13","gross":4400,"net":3300,"taxes":[{"id":1,"name":"PDV 25%","amount":25,"total":1100}],"restoring_reason":null},{"payment_method_id":1,"restored_bill_id":null,"user":{"id":1,"username":"tkresic","name":"Toni","surname":"Kre\u0161i\u0107","email":"tonikresic1997@gmail.com","role":{"id":1,"name":"Administrator"}},"branch":{"id":1,"name":"Zagreb Centar","businessPlaceLabel":1,"address":"Ulica Ante Star\u010devi\u0107a 152","phone":"01 116 2217","createdAt":"2021-06-21T22:46:08.944","updatedAt":"2021-06-21T22:46:08.944"},"products":[{"id":101,"subcategoryId":8,"subcategory":{"id":8,"categoryId":2,"category":{"id":2,"name":"Pi\u0107e"},"name":"Bezalkoholna pi\u0107a"},"tax":{"id":1,"name":"PDV 25%","amount":25,"total":null},"name":"Fanta","price":900,"cost":0,"quantity":1,"image":"http://admin.requiro.info/storage/images\/Fanta.png"},{"id":104,"subcategoryId":8,"subcategory":{"id":8,"categoryId":2,"category":{"id":2,"name":"Pi\u0107e"},"name":"Bezalkoholna pi\u0107a"},"tax":{"id":1,"name":"PDV 25%","amount":25,"total":null},"name":"Ledeni \u010daj","price":1400,"cost":0,"quantity":1,"image":"http://admin.requiro.info/storage/images\/LedeniCaj.png"},{"id":61,"subcategoryId":5,"subcategory":{"id":5,"categoryId":2,"category":{"id":2,"name":"Pi\u0107e"},"name":"Pive"},"tax":{"id":1,"name":"PDV 25%","amount":25,"total":null},"name":"Tomislav","price":1700,"cost":0,"quantity":1,"image":"http://admin.requiro.info/storage/images\/Tomislav.png"},{"id":75,"subcategoryId":6,"subcategory":{"id":6,"categoryId":2,"category":{"id":2,"name":"Pi\u0107e"},"name":"Vina"},"tax":{"id":1,"name":"PDV 25%","amount":25,"total":null},"name":"Pinot sivi","price":7000,"cost":0,"quantity":1,"image":"http://admin.requiro.info/storage/images\/PinotSivi.png"}],"number":12,"business_place_label":1,"cash_register_label":1,"label":"1-1-12","gross":11000,"net":8250,"taxes":[{"id":1,"name":"PDV 25%","amount":25,"total":2750}],"restoring_reason":null},{"payment_method_id":1,"restored_bill_id":null,"user":{"id":1,"username":"tkresic","name":"Toni","surname":"Kre\u0161i\u0107","email":"tonikresic1997@gmail.com","role":{"id":1,"name":"Administrator"}},"branch":{"id":1,"name":"Zagreb Centar","businessPlaceLabel":1,"address":"Ulica Ante Star\u010devi\u0107a 152","phone":"01 116 2217","createdAt":"2021-06-21T22:46:08.944","updatedAt":"2021-06-21T22:46:08.944"},"products":[{"id":10,"subcategoryId":1,"subcategory":{"id":1,"categoryId":1,"category":{"id":1,"name":"Hrana"},"name":"Predjelo"},"tax":{"id":2,"name":"PDV 10%","amount":10,"total":null},"name":"Mozzarella","price":3350,"cost":0,"quantity":1,"image":"http://admin.requiro.info/storage/images\/Mozzarella.png"},{"id":7,"subcategoryId":1,"subcategory":{"id":1,"categoryId":1,"category":{"id":1,"name":"Hrana"},"name":"Predjelo"},"tax":{"id":1,"name":"PDV 25%","amount":25,"total":null},"name":"Ribarski tanjur","price":4750,"cost":0,"quantity":1,"image":"http://admin.requiro.info/storage/images\/RibarskiTanjur.png"},{"id":114,"subcategoryId":9,"subcategory":{"id":9,"categoryId":2,"category":{"id":2,"name":"Pi\u0107e"},"name":"Topli napitci"},"tax":{"id":1,"name":"PDV 25%","amount":25,"total":null},"name":"Kava s mlijekom v.","price":1000,"cost":0,"quantity":1,"image":"http://admin.requiro.info/storage/images\/Kava.png"},{"id":123,"subcategoryId":9,"subcategory":{"id":9,"categoryId":2,"category":{"id":2,"name":"Pi\u0107e"},"name":"Topli napitci"},"tax":{"id":1,"name":"PDV 25%","amount":25,"total":null},"name":"Izbor \u010dajeva","price":1400,"cost":0,"quantity":1,"image":"http://admin.requiro.info/storage/images\/IzborCajeva.png"},{"id":121,"subcategoryId":9,"subcategory":{"id":9,"categoryId":2,"category":{"id":2,"name":"Pi\u0107e"},"name":"Topli napitci"},"tax":{"id":1,"name":"PDV 25%","amount":25,"total":null},"name":"Kakao sa \u0161lagom","price":1800,"cost":0,"quantity":1,"image":"http://admin.requiro.info/storage/images\/KakaoSaSlagom.png"}],"number":11,"business_place_label":1,"cash_register_label":1,"label":"1-1-11","gross":12300,"net":9727,"taxes":[{"id":2,"name":"PDV 10%","amount":10,"total":335},{"id":1,"name":"PDV 25%","amount":25,"total":2238}],"restoring_reason":null},{"payment_method_id":1,"restored_bill_id":11,"user":{"id":1,"username":"tkresic","name":"Toni","surname":"Kre\u0161i\u0107","email":"tonikresic1997@gmail.com","role":{"id":1,"name":"Administrator"}},"branch":{"id":1,"name":"Zagreb Centar","businessPlaceLabel":1,"address":"Ulica Ante Star\u010devi\u0107a 152","phone":"01 116 2217","createdAt":"2021-06-21T22:46:08.944","updatedAt":"2021-06-21T22:46:08.944"},"products":[{"id":93,"subcategoryId":7,"subcategory":{"id":7,"categoryId":2,"category":{"id":2,"name":"Pi\u0107e"},"name":"Alkoholna pi\u0107a"},"tax":{"id":1,"name":"PDV 25%","amount":25,"total":null},"name":"Jack Daniels","price":-2200,"cost":0,"quantity":1,"image":"http://admin.requiro.info/storage/images\/JackDaniels.png"},{"id":90,"subcategoryId":7,"subcategory":{"id":7,"categoryId":2,"category":{"id":2,"name":"Pi\u0107e"},"name":"Alkoholna pi\u0107a"},"tax":{"id":1,"name":"PDV 25%","amount":25,"total":null},"name":"Finlandia vodka","price":-2000,"cost":0,"quantity":1,"image":"http://admin.requiro.info/storage/images\/FinlandiaVodka.png"},{"id":61,"subcategoryId":5,"subcategory":{"id":5,"categoryId":2,"category":{"id":2,"name":"Pi\u0107e"},"name":"Pive"},"tax":{"id":1,"name":"PDV 25%","amount":25,"total":null},"name":"Tomislav","price":-1700,"cost":0,"quantity":1,"image":"http://admin.requiro.info/storage/images\/Tomislav.png"}],"number":10,"business_place_label":1,"cash_register_label":1,"label":"1-1-10","gross":-5900,"net":-4425,"taxes":[{"id":1,"name":"PDV 25%","amount":25,"total":-1475}],"restoring_reason":"gre\u0161ka"},{"payment_method_id":1,"restored_bill_id":null,"user":{"id":1,"username":"tkresic","name":"Toni","surname":"Kre\u0161i\u0107","email":"tonikresic1997@gmail.com","role":{"id":1,"name":"Administrator"}},"branch":{"id":1,"name":"Zagreb Centar","businessPlaceLabel":1,"address":"Ulica Ante Star\u010devi\u0107a 152","phone":"01 116 2217","createdAt":"2021-06-21T22:46:08.944","updatedAt":"2021-06-21T22:46:08.944"},"products":[{"id":11,"subcategoryId":1,"subcategory":{"id":1,"categoryId":1,"category":{"id":1,"name":"Hrana"},"name":"Predjelo"},"tax":{"id":1,"name":"PDV 25%","amount":25,"total":null},"name":"Proljetne rolice","price":2250,"cost":0,"quantity":1,"image":"http://admin.requiro.info/storage/images\/ProljetneRolice.png"},{"id":12,"subcategoryId":1,"subcategory":{"id":1,"categoryId":1,"category":{"id":1,"name":"Hrana"},"name":"Predjelo"},"tax":{"id":2,"name":"PDV 10%","amount":10,"total":null},"name":"Pohani tofu","price":2750,"cost":0,"quantity":1,"image":"http://admin.requiro.info/storage/images\/PohaniTofu.png"}],"number":9,"business_place_label":1,"cash_register_label":1,"label":"1-1-9","gross":5000,"net":4162,"taxes":[{"id":1,"name":"PDV 25%","amount":25,"total":563},{"id":2,"name":"PDV 10%","amount":10,"total":275}],"restoring_reason":null},{"payment_method_id":2,"restored_bill_id":null,"user":{"id":1,"username":"tkresic","name":"Toni","surname":"Kre\u0161i\u0107","email":"tonikresic1997@gmail.com","role":{"id":1,"name":"Administrator"}},"branch":{"id":1,"name":"Zagreb Centar","businessPlaceLabel":1,"address":"Ulica Ante Star\u010devi\u0107a 152","phone":"01 116 2217","createdAt":"2021-06-21T22:46:08.944","updatedAt":"2021-06-21T22:46:08.944"},"products":[{"id":56,"subcategoryId":4,"subcategory":{"id":4,"categoryId":1,"category":{"id":1,"name":"Hrana"},"name":"Desert"},"tax":{"id":2,"name":"PDV 10%","amount":10,"total":null},"name":"Panna cotta","price":4500,"cost":0,"quantity":1,"image":"http://admin.requiro.info/storage/images\/PannaCotta.png"},{"id":28,"subcategoryId":3,"subcategory":{"id":3,"categoryId":1,"category":{"id":1,"name":"Hrana"},"name":"Glavno jelo"},"tax":{"id":2,"name":"PDV 10%","amount":10,"total":null},"name":"Grill piletina","price":4700,"cost":0,"quantity":1,"image":"http://admin.requiro.info/storage/images\/GrillPiletina.png"},{"id":17,"subcategoryId":2,"subcategory":{"id":2,"categoryId":1,"category":{"id":1,"name":"Hrana"},"name":"Salate"},"tax":{"id":1,"name":"PDV 25%","amount":25,"total":null},"name":"Cezar","price":3500,"cost":0,"quantity":1,"image":"http://admin.requiro.info/storage/images\/Cezar.png"},{"id":8,"subcategoryId":1,"subcategory":{"id":1,"categoryId":1,"category":{"id":1,"name":"Hrana"},"name":"Predjelo"},"tax":{"id":2,"name":"PDV 10%","amount":10,"total":null},"name":"Salata od hobotnice","price":5150,"cost":0,"quantity":1,"image":"http://admin.requiro.info/storage/images\/SalataOdHobotnice.png"}],"number":8,"business_place_label":1,"cash_register_label":1,"label":"1-1-8","gross":17850,"net":15540,"taxes":[{"id":2,"name":"PDV 10%","amount":10,"total":1435},{"id":1,"name":"PDV 25%","amount":25,"total":875}],"restoring_reason":null},{"payment_method_id":1,"restored_bill_id":null,"user":{"id":1,"username":"tkresic","name":"Toni","surname":"Kre\u0161i\u0107","email":"tonikresic1997@gmail.com","role":{"id":1,"name":"Administrator"}},"branch":{"id":1,"name":"Zagreb Centar","businessPlaceLabel":1,"address":"Ulica Ante Star\u010devi\u0107a 152","phone":"01 116 2217","createdAt":"2021-06-21T22:46:08.944","updatedAt":"2021-06-21T22:46:08.944"},"products":[{"id":120,"subcategoryId":9,"subcategory":{"id":9,"categoryId":2,"category":{"id":2,"name":"Pi\u0107e"},"name":"Topli napitci"},"tax":{"id":1,"name":"PDV 25%","amount":25,"total":null},"name":"Kakao","price":1600,"cost":0,"quantity":1,"image":"http://admin.requiro.info/storage/images\/Kakao.png"},{"id":114,"subcategoryId":9,"subcategory":{"id":9,"categoryId":2,"category":{"id":2,"name":"Pi\u0107e"},"name":"Topli napitci"},"tax":{"id":1,"name":"PDV 25%","amount":25,"total":null},"name":"Kava s mlijekom v.","price":1000,"cost":0,"quantity":1,"image":"http://admin.requiro.info/storage/images\/Kava.png"},{"id":71,"subcategoryId":5,"subcategory":{"id":5,"categoryId":2,"category":{"id":2,"name":"Pi\u0107e"},"name":"Pive"},"tax":{"id":1,"name":"PDV 25%","amount":25,"total":null},"name":"Crna kraljica","price":2350,"cost":0,"quantity":1,"image":"http://admin.requiro.info/storage/images\/CrnaKraljica.png"},{"id":62,"subcategoryId":5,"subcategory":{"id":5,"categoryId":2,"category":{"id":2,"name":"Pi\u0107e"},"name":"Pive"},"tax":{"id":2,"name":"PDV 10%","amount":10,"total":null},"name":"Karlova\u010dko","price":1200,"cost":0,"quantity":1,"image":"http://admin.requiro.info/storage/images\/Karlovacko.png"}],"number":7,"business_place_label":1,"cash_register_label":1,"label":"1-1-7","gross":6150,"net":4792,"taxes":[{"id":1,"name":"PDV 25%","amount":25,"total":1238},{"id":2,"name":"PDV 10%","amount":10,"total":120}],"restoring_reason":null},{"payment_method_id":2,"restored_bill_id":null,"user":{"id":1,"username":"tkresic","name":"Toni","surname":"Kre\u0161i\u0107","email":"tonikresic1997@gmail.com","role":{"id":1,"name":"Administrator"}},"branch":{"id":1,"name":"Zagreb Centar","businessPlaceLabel":1,"address":"Ulica Ante Star\u010devi\u0107a 152","phone":"01 116 2217","createdAt":"2021-06-21T22:46:08.944","updatedAt":"2021-06-21T22:46:08.944"},"products":[{"id":124,"subcategoryId":10,"subcategory":{"id":10,"categoryId":3,"category":{"id":3,"name":"Ostalo"},"name":"Cigarete"},"tax":{"id":1,"name":"PDV 25%","amount":25,"total":null},"name":"Marlboro","price":3300,"cost":0,"quantity":1,"image":"http://admin.requiro.info/storage/images\/Marlboro.png"},{"id":125,"subcategoryId":10,"subcategory":{"id":10,"categoryId":3,"category":{"id":3,"name":"Ostalo"},"name":"Cigarete"},"tax":{"id":1,"name":"PDV 25%","amount":25,"total":null},"name":"Dunhill","price":3100,"cost":0,"quantity":1,"image":"http://admin.requiro.info/storage/images\/Dunhill.png"}],"number":6,"business_place_label":1,"cash_register_label":1,"label":"1-1-6","gross":6400,"net":4800,"taxes":[{"id":1,"name":"PDV 25%","amount":25,"total":1600}],"restoring_reason":null},{"payment_method_id":1,"restored_bill_id":null,"user":{"id":1,"username":"tkresic","name":"Toni","surname":"Kre\u0161i\u0107","email":"tonikresic1997@gmail.com","role":{"id":1,"name":"Administrator"}},"branch":{"id":1,"name":"Zagreb Centar","businessPlaceLabel":1,"address":"Ulica Ante Star\u010devi\u0107a 152","phone":"01 116 2217","createdAt":"2021-06-21T22:46:08.944","updatedAt":"2021-06-21T22:46:08.944"},"products":[{"id":59,"subcategoryId":5,"subcategory":{"id":5,"categoryId":2,"category":{"id":2,"name":"Pi\u0107e"},"name":"Pive"},"tax":{"id":1,"name":"PDV 25%","amount":25,"total":null},"name":"Stella Artois","price":1400,"cost":0,"quantity":1,"image":"http://admin.requiro.info/storage/images\/StellaArtois.png"},{"id":64,"subcategoryId":5,"subcategory":{"id":5,"categoryId":2,"category":{"id":2,"name":"Pi\u0107e"},"name":"Pive"},"tax":{"id":2,"name":"PDV 10%","amount":10,"total":null},"name":"Staropramen","price":1500,"cost":0,"quantity":1,"image":"http://admin.requiro.info/storage/images\/Staropramen.png"},{"id":71,"subcategoryId":5,"subcategory":{"id":5,"categoryId":2,"category":{"id":2,"name":"Pi\u0107e"},"name":"Pive"},"tax":{"id":1,"name":"PDV 25%","amount":25,"total":null},"name":"Crna kraljica","price":2350,"cost":0,"quantity":1,"image":"http://admin.requiro.info/storage/images\/CrnaKraljica.png"}],"number":5,"business_place_label":1,"cash_register_label":1,"label":"1-1-5","gross":5250,"net":4162,"taxes":[{"id":1,"name":"PDV 25%","amount":25,"total":938},{"id":2,"name":"PDV 10%","amount":10,"total":150}],"restoring_reason":null},{"payment_method_id":1,"restored_bill_id":null,"user":{"id":1,"username":"tkresic","name":"Toni","surname":"Kre\u0161i\u0107","email":"tonikresic1997@gmail.com","role":{"id":1,"name":"Administrator"}},"branch":{"id":1,"name":"Zagreb Centar","businessPlaceLabel":1,"address":"Ulica Ante Star\u010devi\u0107a 152","phone":"01 116 2217","createdAt":"2021-06-21T22:46:08.944","updatedAt":"2021-06-21T22:46:08.944"},"products":[{"id":99,"subcategoryId":7,"subcategory":{"id":7,"categoryId":2,"category":{"id":2,"name":"Pi\u0107e"},"name":"Alkoholna pi\u0107a"},"tax":{"id":1,"name":"PDV 25%","amount":25,"total":null},"name":"Loza","price":1400,"cost":0,"quantity":1,"image":"http://admin.requiro.info/storage/images\/Loza.png"},{"id":90,"subcategoryId":7,"subcategory":{"id":7,"categoryId":2,"category":{"id":2,"name":"Pi\u0107e"},"name":"Alkoholna pi\u0107a"},"tax":{"id":1,"name":"PDV 25%","amount":25,"total":null},"name":"Finlandia vodka","price":2000,"cost":0,"quantity":1,"image":"http://admin.requiro.info/storage/images\/FinlandiaVodka.png"}],"number":4,"business_place_label":1,"cash_register_label":1,"label":"1-1-4","gross":3400,"net":2550,"taxes":[{"id":1,"name":"PDV 25%","amount":25,"total":850}],"restoring_reason":null},{"payment_method_id":2,"restored_bill_id":null,"user":{"id":1,"username":"tkresic","name":"Toni","surname":"Kre\u0161i\u0107","email":"tonikresic1997@gmail.com","role":{"id":1,"name":"Administrator"}},"branch":{"id":1,"name":"Zagreb Centar","businessPlaceLabel":1,"address":"Ulica Ante Star\u010devi\u0107a 152","phone":"01 116 2217","createdAt":"2021-06-21T22:46:08.944","updatedAt":"2021-06-21T22:46:08.944"},"products":[{"id":76,"subcategoryId":6,"subcategory":{"id":6,"categoryId":2,"category":{"id":2,"name":"Pi\u0107e"},"name":"Vina"},"tax":{"id":2,"name":"PDV 10%","amount":10,"total":null},"name":"Chardonnay","price":10000,"cost":0,"quantity":3,"image":"http://admin.requiro.info/storage/images\/Chardonnay.png"}],"number":3,"business_place_label":1,"cash_register_label":1,"label":"1-1-3","gross":30000,"net":27000,"taxes":[{"id":2,"name":"PDV 10%","amount":10,"total":3000}],"restoring_reason":null},{"payment_method_id":2,"restored_bill_id":null,"user":{"id":1,"username":"tkresic","name":"Toni","surname":"Kre\u0161i\u0107","email":"tonikresic1997@gmail.com","role":{"id":1,"name":"Administrator"}},"branch":{"id":1,"name":"Zagreb Centar","businessPlaceLabel":1,"address":"Ulica Ante Star\u010devi\u0107a 152","phone":"01 116 2217","createdAt":"2021-06-21T22:46:08.944","updatedAt":"2021-06-21T22:46:08.944"},"products":[{"id":68,"subcategoryId":5,"subcategory":{"id":5,"categoryId":2,"category":{"id":2,"name":"Pi\u0107e"},"name":"Pive"},"tax":{"id":2,"name":"PDV 10%","amount":10,"total":null},"name":"Paulaner","price":2200,"cost":0,"quantity":2,"image":"http://admin.requiro.info/storage/images\/Paulaner.png"},{"id":71,"subcategoryId":5,"subcategory":{"id":5,"categoryId":2,"category":{"id":2,"name":"Pi\u0107e"},"name":"Pive"},"tax":{"id":1,"name":"PDV 25%","amount":25,"total":null},"name":"Crna kraljica","price":2350,"cost":0,"quantity":1,"image":"http://admin.requiro.info/storage/images\/CrnaKraljica.png"},{"id":65,"subcategoryId":5,"subcategory":{"id":5,"categoryId":2,"category":{"id":2,"name":"Pi\u0107e"},"name":"Pive"},"tax":{"id":1,"name":"PDV 25%","amount":25,"total":null},"name":"Nik\u0161i\u0107ko","price":1400,"cost":0,"quantity":1,"image":"http://admin.requiro.info/storage/images\/Niksicko.png"}],"number":2,"business_place_label":1,"cash_register_label":1,"label":"1-1-2","gross":8150,"net":6772,"taxes":[{"id":2,"name":"PDV 10%","amount":10,"total":440},{"id":1,"name":"PDV 25%","amount":25,"total":938}],"restoring_reason":null},{"payment_method_id":1,"restored_bill_id":null,"user":{"id":1,"username":"tkresic","name":"Toni","surname":"Kre\u0161i\u0107","email":"tonikresic1997@gmail.com","role":{"id":1,"name":"Administrator"}},"branch":{"id":1,"name":"Zagreb Centar","businessPlaceLabel":1,"address":"Ulica Ante Star\u010devi\u0107a 152","phone":"01 116 2217","createdAt":"2021-06-21T22:46:08.944","updatedAt":"2021-06-21T22:46:08.944"},"products":[{"id":63,"subcategoryId":5,"subcategory":{"id":5,"categoryId":2,"category":{"id":2,"name":"Pi\u0107e"},"name":"Pive"},"tax":{"id":1,"name":"PDV 25%","amount":25,"total":null},"name":"Heineken","price":1000,"cost":0,"quantity":2,"image":"http://admin.requiro.info/storage/images\/Heineken.png"}],"number":1,"business_place_label":1,"cash_register_label":1,"label":"1-1-1","gross":2000,"net":1500,"taxes":[{"id":1,"name":"PDV 25%","amount":25,"total":500}],"restoring_reason":null}]';
        $data = json_decode($data, true);
        $today = Carbon::now()->subDays(8);


        $number = 0;
        for ($i = 0; $i < 7; $i++) {
            $today->addDay();

            try {
                $numberOfSkip = random_int(0, 15);
            } catch (\Exception $e) {
                $numberOfSkip = 7;
            }

            $toSkip = [];
            for ($j = 0; $j < $numberOfSkip; $j++) {
                try {
                    $toSkip[] = random_int(0, 21);
                } catch (\Exception $e) {
                    $toSkip[] = 5;
                }
            }

            foreach ($data as $key => $bill) {

                if (in_array($key, $toSkip)) {
                    continue;
                }

                $bill['number'] = ++$number;
                $bill['label'] = "1-1-" . $number;
                $bill['created_at'] = $today;
                Bill::create($bill);
            }
        }
    }
}
