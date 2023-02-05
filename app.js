$(document).ready(function(){
    var arrLang={
        'tr':{
            '0':'ANASAYFA',
            '1':'HAKKIMIZDA',
            '2':'HİZMETLERİMİZ',
            '3':'İLETİŞİM',
            '4':'GALERİ',
            '5':'GİRİŞ',
            '6':'KWM MARİN ELEKTRİK & ELEKTRONİK LİMİTED ŞİRKETİ',
            '7':'KWM Marin Elektrik & Elektronik Limited Şirketi Sayfasına Hoş Geldiniz!',
            '8':'Daha fazla bilgi edinin..',
            '9':'Sektördeki son derece olumlu bilinirliğini, yüksek hizmet kalitesi, müşteri odaklı çalışması, servislerinin garantili olması, sürekli kendini yenileyen ve eğitimlerini aksatmayan güler yüzlü personeli, iş disiplini ve takım çalışması sayesinde sürdürmektedir.',
            '10':'En büyük ilkemiz; müşterinin vizyonuna uygun çözümler üretmek,müşteriyle sağlıklı, dürüst, hızlı iletişimler kurabilmektir. Çünkü müşterilerimizle ilişkilerimizi kısa vadede düşünmeyiz. Biz biliriz ki onlar ihtiyaçları olduğunda bizimle çalışmanın ne kadar güven verici olduğunu bilirler. Onlar bilirler ki biz her zaman onlar için daima en iyisini düşünürüz.',
            '11':'Vizyonumuz',
            '12':'Misyonumuz',
            '13':'Görüntüle',
            '14':'Teknik Servis',
            '15':'Deniz Malzemeleri',
            '16':'Tekne Bakım Hizmeti',
            '17':'Sektördeki son derece olumlu bilinirliğini, yüksek hizmet kalitesi, müşteri odaklı çalışması, servislerinin garantili olması, sürekli kendini yenileyen ve eğitimlerini aksatmayan güler yüzlü personeli, iş disiplini ve takım çalışması sayesinde sürdürmektedir.',
            '18':'Tüm Motor ve Mekanik Servisleri; Genel Bakım ve Tamirleri, Elektrik ve Elektronik, Paslanmaz Krom İşçiliği, Su Yapıcı Servisi bünyemizde sağlanan servisler arasındadır.',
            '19':'West Marine; Yanmar, Fischer Panda, Volvo Penta, Williams, Kohler, Harken, Side Power, ABT Trac, Sea Recovery, Opacmare, Besenzoni, Finsulate ve Idromar gibi sektörün değerli markalarının yetkili servisidir.',
            '20':'Yedek parça mağazamız, servis atölyemiz, bot kışlama hangarımız ve servis araçlarımızla Fethiye Göcek Bölgesinde hizmet vermekteyiz.',
            '21':'Daha da iyisi, gelin, yüz yüze görüşelim!',
            '22':'Müşterilerimize değer veriyoruz. Mesai saatleri içinde bizi dilediğiniz zaman ziyaret edebilirsiniz.',
            '23':'Email Adresi',
            '24':'',
            '25':'Instagram kullanıcı adı',
            '26':'Facebook kullanıcı adı',
            '27':'Copyright © 2023 Tüm Hakları Saklıdır.'
        },
        'en':{
            '0':'HOME',
            '1':'ABOUT',
            '2':'SERVİCES',
            '3':'CONTACT',
            '4':'GALLERY',
            '5':'LOGIN',
            '6':'KWM MARIN ELECTRICS & ELECTRONICS LIMITED COMPANY',
            '7':'Welcome to KWM Marin Elektrik & Elektronik Limited Company Page!',
            '8':'Learn More..',
            '9':'It maintains its extremely positive recognition in the sector thanks to its high service quality, customer-oriented work, guaranteed services, friendly staff who constantly renew themselves and do not interrupt their training, work discipline and teamwork.',
            '10':'Our biggest principle is to produce solutions in accordance with the vision of the customer, to establish healthy, honest and fast communication with the customer. Because we do not consider our relationships with our customers in the short term. We know that they know how reassuring it is to work with us when they need. They know that we always think the best for them.',
            '11':'Our Vision',
            '12':'Our Mission',
            '13':'View',
            '14':'Technical Service',
            '15':'Marine Materials',
            '16':'Boat Maintenance Service',
            '17':'It maintains its extremely positive recognition in the sector thanks to its high service quality, customer-oriented work, guaranteed services, friendly staff who constantly renew themselves and do not interrupt their training, work discipline and teamwork.',
            '18':'All Engine and Mechanical Services; General Maintenance and Repairs, Electrical and Electronic, Stainless Chrome Workmanship, Water Maker Service are among the services provided by us.',
            '19':'West Marine; Yanmar, Fischer Panda, Volvo Penta, Williams, Kohler, Harken, Side Power, ABT Trac, Sea Recovery, Opacmare, Besenzoni, Finsulate and Idromar are the authorised service of valuable brands of the sector.',
            '20':'Spare parts store, service workshop, boat wintering hangar and we serve in Fethiye Gocek Region with our service vehicles.',
            '21':'Better yet, let\'s meet face to face!',
            '22':'We value our customers. You can visit us at any time during office hours.',
            '23':'Email Address',
            '24':'',
            '25':'Instagram user name',
            '26':'Facebook user name',
            '27':'Copyright © 2023 All Rights Reserved.'
        }
    };

    $('.dropdown-item').click(function(){
        localStorage.setItem('dil', JSON.stringify($(this).attr('id')));
        location.reload();
    })

    var lang=JSON.parse(localStorage.getItem('dil'));
    if(lang=="en"){
        $("#language").html("ENGLISH");
    }
    else{
        $("#language").html("TÜRKÇE");
    }
    $('a,h5,p,h1,h2,span,li,button,h3,label').each(function(index,element){
        $(this).text(arrLang[lang][$(this).attr('key')]);
    })
    
})