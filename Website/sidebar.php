<?php

include_once("db.php");


$sql="SELECT * FROM leaders;";
$leaders = $con ? mysqli_query($con,$sql) : false;

?>
              
              
              
              
              
              <style>
                .social-area .fa{
                    margin-top: 10px;
                }
              </style>
              

              
              <div class="col-12 col-md-8 col-lg-4 d-flex">
                    <div class="post-sidebar-area wow fadeInUpBig w-100 d-flex flex-column justify-content-between" data-wow-delay="0.2s">
                        <!-- Widget Area -->
                        <div class="sidebar-widget-area">
                            <h5 class="title">About Lokdal</h5>
                            <div class="widget-content">
                                <p>
                                    Presently senior social activist and politician Mr. Sunil Singh Ji is its national president, 
                                    who is born in a patriotic elite family in Aligarh district of Uttar Pradesh. Mr. Sunil Singh 
                                    has graduated in Engineering and Masters in Management. Mr. Sunil Singh has also been a member 
                                    of Uttar Pradesh Legislative Council.
                                </p>
                            </div>
                        </div>
                        <!-- Widget Area -->
                        <div class="sidebar-widget-area">
                            <h5 class="title">Top Profiles</h5>
                            <div class="widget-content">
                            <?php
                                if($leaders){
                                while($row=mysqli_fetch_assoc($leaders)){
											  
                            ?>
                                 <!-- Single Blog Post -->
                                 <div class="single-blog-post post-style-2 d-flex align-items-center widget-post">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <img src="../dashboard/img/leaders/<?=$row['img'];?>" alt="" loading="lazy" decoding="async">
                                    </div>
                                    <!-- Post Content -->
                                    <div class="post-content">
                                        <a href="<?=$row['link'];?>" class="headline">
                                            <h5 class="mb-0"><?=$row['name'];?></h5>
                                        </a>
                                    </div>
                                </div>

                            <?php
                                 }}							  
                            ?>
                                
                            </div>
                        </div>
                        <!-- Widget Area -->
                        <div class="sidebar-widget-area">
                            <h5 class="title">Stay Connected</h5>
                            <div class="widget-content">
                                <div class="social-area d-flex justify-content-between">
                                    <a href="https://www.facebook.com/Lokdalindia/" target="_blank"><i class="fa fa-facebook"></i></a>
                                    <a href="https://twitter.com/lokdalindia" target="_blank"><i class="fa fa-twitter"></i></a>
                                    <a href="mailto:lokdalparty@gmail.com" target="_blank"><i class="fa fa-envelope mr-1"></i></a>
                                    <a href="tel:9810074878" target="_blank"><i class="fa fa-phone"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Widget Area -->
                        <div class="sidebar-widget-area">
                            <h5 class="title">Today’s Pick</h5>
                            <div class="widget-content">
                                <!-- Single Blog Post -->
                                <div class="single-blog-post todays-pick">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <img src="img/img/logo1.png" alt="" loading="lazy" decoding="async">
                                    </div>
                                    <!-- Post Content -->
                                    <div class="post-content px-0 pb-0">
                                        <a href="index.php" class="headline">
                                            <h3 style="color: #00772D; text-align: center;font-weight: bolder; font-size: xx-large;"><strong>Lokdal</strong></h3>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Widget Area: Key Headlines -->
                        <div class="sidebar-widget-area">
                            <h5 class="title">प्रमुख समाचार एवं अपडेट्स</h5>
                            <div class="widget-content">
                                <?php
                                $sidebarHighlights = [
                                    ['img' => 'img/news/latest-news/news-109.jpeg', 'title' => 'द्वारका सेक्टर-23 पुलिस स्टेशन: हिरासत के बाद राष्ट्रीय अध्यक्ष चौधरी सुनील सिंह व पदाधिकारियों का मार्च', 'date' => '09 Oct 2026', 'url' => 'img/news/latest-news/news-109.jpeg'],
                                    ['img' => 'img/news/latest-news/news-107.jpeg', 'title' => 'दिल्ली पुलिस हिरासत परिसर: पुलिस अधिकारियों द्वारा औपचारिक कार्रवाई एवं नेताओं का अडिग रुख', 'date' => '09 Oct 2026', 'url' => 'img/news/latest-news/news-107.jpeg'],
                                    ['img' => 'img/news/latest-news/news-91.jpeg', 'title' => 'ग्राउंड रिपोर्ट: दिल्ली पुलिस बैरिकेडिंग पर डटे राष्ट्रीय अध्यक्ष चौधरी सुनील सिंह व कार्यकर्ता — तिरंगे के साथ विशाल धरना', 'date' => '09 Oct 2026', 'url' => 'img/news/latest-news/news-91.jpeg'],
                                    ['img' => 'img/news/latest-news/news-92.jpeg', 'title' => 'एक्सक्लूसिव दृश्य: दिल्ली पुलिस वैन में राष्ट्रीय अध्यक्ष चौधरी सुनील सिंह की हिरासत के क्षण', 'date' => '09 Oct 2026', 'url' => 'img/news/latest-news/news-92.jpeg'],
                                    ['img' => 'img/news/latest-news/news-95.jpeg', 'title' => 'शांतिपूर्ण विरोध पर पुलिस की बर्बरता: सड़क पर बैठकर तानाशाही के खिलाफ लोकदल का कड़ा प्रतिरोध', 'date' => '09 Oct 2026', 'url' => 'img/news/latest-news/news-95.jpeg'],
                                    ['img' => 'img/news/latest-news/news-98.jpeg', 'title' => 'राष्ट्रीय अध्यक्ष चौधरी सुनील सिंह का संदेश: "हमारी आवाज को दबाया नहीं जा सकता, संघर्ष जारी रहेगा"', 'date' => '09 Oct 2026', 'url' => 'img/news/latest-news/news-98.jpeg'],
                                    ['img' => 'img/news/latest-news/news-106.jpeg', 'title' => 'पुलिस हिरासत बस के गेट से चौधरी सुनील सिंह का संदेश: लोकतंत्र को बचाने की जंग जारी रहेगी', 'date' => '09 Oct 2026', 'url' => 'img/news/latest-news/news-106.jpeg'],
                                    ['img' => 'img/news/latest-news/news-88.jpeg', 'title' => 'अनुपूरक, लखनऊ: INDIA गठबंधन के हल्ला बोल से घबराई भाजपा, चोरी भी और सीना-जोरी भी : सुनील सिंह', 'date' => '07 Oct 2026', 'url' => 'img/news/latest-news/news-88.jpeg'],
                                    ['img' => 'img/news/latest-news/news-89.jpeg', 'title' => 'सूर्योदय भारत समाचार सेवा: मुख्य चुनाव आयुक्त ज्ञानेश कुमार से इस्तीफे की मांग — चौधरी सुनील सिंह', 'date' => '07 Oct 2026', 'url' => 'img/news/latest-news/news-89.jpeg'],
                                    ['img' => 'img/news/latest-news/news-90.jpeg', 'title' => 'सद्भावना समाचार: इंडिया गठबंधन के आंदोलन से भाजपा में बेचैनी : चौधरी सुनील सिंह', 'date' => '07 Oct 2026', 'url' => 'img/news/latest-news/news-90.jpeg'],
                                    ['img' => 'img/news/latest-news/news-90.jpeg', 'title' => 'Facebook Video: INDIA गठबंधन के हल्ला बोल से घबराई भाजपा — चौधरी सुनील सिंह (Facebook Live)', 'date' => '07 Oct 2026', 'url' => 'https://www.facebook.com/share/v/1EryM5iQvA/'],
                                    ['img' => 'img/news/latest-news/news-88.jpeg', 'title' => 'Facebook Post: चुनाव आयोग की जवाबदेही व मतदाता अधिकारों पर सुनील सिंह का तीखा प्रहार', 'date' => '07 Oct 2026', 'url' => 'https://www.facebook.com/share/p/18vL4T2c5Y/?mibextid=wwXIfr'],
                                    ['img' => 'img/news/latest-news/news-86.jpeg', 'title' => 'चुनाव आयोग की सफाई भाजपा क्यों दे रही है? क्या आयोग वही कर रहा है जो भाजपा चाहती है : सुनील सिंह', 'date' => '06 Oct 2026', 'url' => 'img/news/latest-news/news-86.jpeg'],
                                    ['img' => 'img/news/latest-news/news-87.jpeg', 'title' => 'PPN NEWS: INDIA गठबंधन के हल्ला बोल से घबराई भाजपा, चोरी भी और सीना-जोरी भी : सुनील सिंह', 'date' => '06 Oct 2026', 'url' => 'https://prakashprabhaw.com/khabar-hatke/india-gathabthhana-ka-hall-bl-sa-ghabraii-bhajapa/detail'],
                                    ['img' => 'img/news/latest-news/news-86.jpeg', 'title' => 'समर सलिल: INDIA गठबंधन के हल्ला बोल से भाजपा में बेचैनी, ज्ञानेश कुमार इस्तीफा दें : सुनील सिंह', 'date' => '06 Oct 2026', 'url' => 'https://samarsaleel.com/india-alliance-halla-bol-sunil-singh-gyanesh-kumar-resignation/531993'],
                                    ['img' => 'img/news/latest-news/news-87.jpeg', 'title' => 'सूर्योदय भारत: भाजपा और चुनाव आयोग पर लोकदल अध्यक्ष सुनील सिंह का तीखा हमला; CEC से मांगा इस्तीफा', 'date' => '06 Oct 2026', 'url' => 'https://suryodaybharat.com/lokdal-president-sunil-singh-launches-a-scathing-attack-on-the-bjp-and-the-election-commission-demands-the-chief-election-commissioners-resignation/'],
                                    ['img' => 'img/news/latest-news/news-86.jpeg', 'title' => 'विशेष ब्लॉग: INDIA गठबंधन के हल्ला बोल से घबराई भाजपा, चोरी भी और सीना-जोरी भी : सुनील सिंह', 'date' => '06 Oct 2026', 'url' => 'https://9473938609.blogspot.com/2026/10/india_0442479220.html'],
                                    ['img' => 'img/donation/cheque-sandeep-tomar.jpeg', 'title' => 'लोकदल किसान व लोकतंत्र रक्षा कोष: श्री संदीप तोमर जी द्वारा ₹50,000/- का आर्थिक सहयोग प्राप्त', 'date' => '05 Oct 2026', 'url' => 'donate.php'],
                                    ['img' => 'img/news/latest-news/news-78.jpeg', 'title' => '🔴 [एक्सक्लूसिव वीडियो 1] जंतर-मंतर हिरासत बस से चौधरी सुनील सिंह का लाइव संदेश', 'date' => '02 Oct 2026', 'url' => 'video/wp-video-7.mp4'],
                                    ['img' => 'video/wp-video-8-thumb.jpg', 'title' => '🔴 [ग्राउंड वीडियो 2] जंतर-मंतर जेल भरो आंदोलन: धारा 163 व मीडिया कवरेज', 'date' => '02 Oct 2026', 'url' => 'video/wp-video-8.mp4'],
                                    ['img' => 'img/news/latest-news/news-76.jpeg', 'title' => 'स्वदेश (03 Oct 2026): 2027 का रण: सपा का पीडीए रथ — “लोकदल इंडिया गठबंधन का मजबूत घटक है” : सुनील सिंह', 'date' => '03 Oct 2026', 'url' => 'img/news/latest-news/news-76.jpeg'],
                                    ['img' => 'img/news/latest-news/news-77.jpeg', 'title' => 'राष्ट्रीय सुदर्शन: गांधी जयंती पर जंतर-मंतर से लोकदल का जेल भरो आंदोलन : चौधरी सुनील सिंह', 'date' => '02 Oct 2026', 'url' => 'img/news/latest-news/news-77.jpeg'],
                                    ['img' => 'img/news/latest-news/news-78.jpeg', 'title' => 'जंतर-मंतर जेल भरो आंदोलन: दिल्ली पुलिस बस में राष्ट्रीय अध्यक्ष चौधरी सुनील सिंह व नेतागण', 'date' => '02 Oct 2026', 'url' => 'img/news/latest-news/news-78.jpeg'],
                                    ['img' => 'img/news/latest-news/news-71.jpeg', 'title' => 'गांधी जयंती पर जंतर-मंतर से लोकदल ने शुरू किया जेल भरो आंदोलन : चौधरी सुनील सिंह — Cherish Times', 'date' => '02 Oct 2026', 'url' => 'https://www.cherishtimes.in/uttar-pradesh/90755'],
                                    ['img' => 'img/news/latest-news/news-70.jpeg', 'title' => 'जंतर-मंतर पर चुनाव आयुक्त के विरुद्ध \'जेल भरो आंदोलन\'; राष्ट्रीय अध्यक्ष चौधरी सुनील सिंह हिरासत में — सूर्योदय भारत', 'date' => '02 Oct 2026', 'url' => 'https://suryodaybharat.com/lokdals-fill-the-jails-protest-against-the-election-commissioner-at-jantar-mantar-national-president-chaudhary-sunil-singh-in-police-custody/'],
                                    ['img' => 'img/news/latest-news/news-69.jpeg', 'title' => '4tv News Satellite: गांधी जयंती पर जंतर-मंतर से लोकदल का जेल भरो आंदोलन (YouTube Video)', 'date' => '02 Oct 2026', 'url' => 'https://youtu.be/6Tz2jiiP7G0?si=_fLFHVCDp-0oT_Jc'],
                                    ['img' => 'img/news/latest-news/news-74.jpeg', 'title' => 'PPN News: गांधी जयंती पर जंतर-मंतर से लोकदल ने शुरू किया जेल भरो आंदोलन : चौधरी सुनील सिंह', 'date' => '02 Oct 2026', 'url' => 'https://prakashprabhaw.com/khabar-hatke/jail-bharo-andolan/detail'],
                                    ['img' => 'img/news/latest-news/news-72.jpeg', 'title' => 'स्वर्णप्रिया: जंतर-मंतर से लोकदल का ‘जेल भरो’ आंदोलन, चौधरी सुनील सिंह समेत प्रदर्शनकारी हिरासत में', 'date' => '02 Oct 2026', 'url' => 'https://swarnapriya.com/?p=37012'],
                                    ['img' => 'img/news/latest-news/news-73.png', 'title' => 'बहुजन विचार: मतदाता अधिकार और लोकतांत्रिक संस्थाओं की जवाबदेही पर जेल भरो आंदोलन — सुनील सिंह', 'date' => '02 Oct 2026', 'url' => 'https://bahujanvichar.com/raising-questions-regarding-voters-rights-and-the-accountability-of-democratic-institutions-is-the-democratic-right-of-any-citizen/'],
                                    ['img' => 'img/news/latest-news/news-75.jpeg', 'title' => 'लोकदल आधिकारिक फेसबुक: यह सिर्फ शुरुआत है! जेल भरो आंदोलन शुरू, रुकेंगे नहीं किसान और युवा', 'date' => '02 Oct 2026', 'url' => 'https://www.facebook.com/share/18LQencKAf/?mibextid=wwXIfr'],
                                    ['img' => 'img/news/latest-news/news-73.png', 'title' => 'बहुजन विचार वीडियो: पीएम और गृह मंत्री के खिलाफ आंदोलन की औपचारिक घोषणा — सुनील सिंह', 'date' => '02 Oct 2026', 'url' => 'https://www.facebook.com/share/v/1QLV5avxig/'],
                                    ['img' => 'img/news/latest-news/news-74.jpeg', 'title' => 'PPN वीडियो: जंतर-मंतर से लोकदल का जेल भरो आंदोलन, सुनील सिंह पुलिस हिरासत में — Facebook Live', 'date' => '02 Oct 2026', 'url' => 'https://www.facebook.com/share/v/18CwLzxjMe/'],
                                    ['img' => 'img/news/latest-news/news-68.jpeg', 'title' => 'SIR को लेकर भारत की इंटरनेशनल बेइज्जती: ज्ञानेश कुमार पर बुरी तरह भड़का UN, 60 दिन में मांगा जवाब!', 'date' => '29 Sep 2026', 'url' => 'https://www.facebook.com/share/v/1GrxzshzGh/'],
                                    ['img' => 'img/news/latest-news/news-67.jpeg', 'title' => 'ज्योतिषी का चौंकाने वाला दावा, ग्रहों ने तय कर दी मोदी और ज्ञानेश कुमार की विदाई! — 4PM News LIVE', 'date' => '29 Sep 2026', 'url' => 'https://www.facebook.com/share/v/1EZDeNhw2D/'],
                                    ['img' => 'img/news/latest-news/news-66.jpeg', 'title' => 'TADIPAAR: अमित शाह और सत्ता की राजनीति का अनसुना सच — विशेष वीडियो रील', 'date' => '29 Sep 2026', 'url' => 'https://www.instagram.com/reel/Dc957qETrZV/?stkn=M3dvNjlpZzd4eWs1'],
                                    ['img' => 'img/news/latest-news/news-63.jpeg', 'title' => 'गठबंधन को कमजोर करने वाले बयानों से बचें, सभी साथी एकजुट रहें : सुनील सिंह', 'date' => '28 Sep 2026', 'url' => 'img/news/latest-news/news-63.jpeg'],
                                    ['img' => 'img/news/latest-news/news-64.jpeg', 'title' => 'INDIA गठबंधन की एकजुटता पर चौधरी सुनील सिंह का विशेष वीडियो संदेश — X (Twitter)', 'date' => '28 Sep 2026', 'url' => 'https://x.com/lokdalindia/status/2104572588303565103?s=46&t=_2mEBmLj46j89OPjnvYbbg'],
                                    ['img' => 'img/news/latest-news/news-65.jpeg', 'title' => 'वोट चोरी, किसान और युवा मुद्दों पर चौधरी सुनील सिंह की अपील — Facebook Video', 'date' => '28 Sep 2026', 'url' => 'https://www.facebook.com/share/v/19fTgFLpLJ/?mibextid=wwXIfr'],
                                    ['img' => 'img/news/latest-news/news-61.jpeg', 'title' => 'मुख्य चुनाव आयुक्त ज्ञानेश कुमार को न PM बनना है न CM, फिर सत्ता की बेचैनी क्यों?: सुनील सिंह', 'date' => '28 Sep 2026', 'url' => 'https://www.facebook.com/share/p/1c9wGrwSyc/?mibextid=wwXIfr'],
                                    ['img' => 'img/news/latest-news/news-60.jpeg', 'title' => 'CEC के खिलाफ फिर एकजुट होगा विपक्ष? इस्तीफे के लिए मोर्चेबंदी — LIVE', 'date' => '28 Sep 2026', 'url' => 'https://www.facebook.com/share/v/1Hn2YdNYMt/'],
                                    ['img' => 'img/news/latest-news/news-62.jpeg', 'title' => 'मुख्य चुनाव आयुक्त ज्ञानेश कुमार पर तीखा हमला: राष्ट्रीय सुदर्शन रिपोर्ट', 'date' => '26 Sep 2026', 'url' => 'img/news/latest-news/news-62.jpeg'],
                                    ['img' => 'img/news/latest-news/news-46.jpeg', 'title' => 'ज़ी न्यूज़: सुनील सिंह ने की राहुल गांधी से मुलाकात, UP चुनाव में मांगी 35 सीटें', 'date' => '23 Sep 2026', 'url' => 'https://zeenews.india.com/hindi/india/up-uttarakhand/up-politics/lokdal-leader-sunil-singh-meet-rahul-gandhi-demands-seats-in-up-election/3304111/amp'],
                                    ['img' => 'img/news/latest-news/news-47.jpeg', 'title' => 'दैनिक जागरण: सुनील सिंह ने राहुल गांधी से की मुलाकात, लोकदल ने UP में मांगी सीटें', 'date' => '23 Sep 2026', 'url' => 'https://www.jagran.com/uttar-pradesh/lucknow-city-sunil-singh-meets-rahul-gandhi-lokdal-claims-35-up-seats-40381773.html'],
                                    ['img' => 'img/news/latest-news/news-42.jpeg', 'title' => 'RLD अपने मंचों पर लोकदल का नाम लेकर चौधरी चरण सिंह का अपमान बंद करे: लोकदल', 'date' => '22 Sep 2026', 'url' => 'img/news/latest-news/news-42.jpeg'],
                                    ['img' => 'img/news/latest-news/news-43.jpeg', 'title' => 'एसआईआर में दिग्गजों के नाम सामने आए, अब आम मतदाता का क्या होगा : सुनील सिंह', 'date' => '22 Sep 2026', 'url' => 'img/news/latest-news/news-43.jpeg'],
                                    ['img' => 'img/news/latest-news/wp-image-1.jpeg', 'title' => 'आजतक: 2027 में अखिलेश यादव को मुख्यमंत्री बनाना है — चौधरी सुनील सिंह', 'date' => '18 Sep 2026', 'url' => 'https://x.com/aajtak/status/2100949903572967630'],
                                    ['img' => 'img/news/latest-news/news-31.jpeg', 'title' => 'आलू किसान तीन तरफा मार में — खाद कालाबाजारी व मंडी संकट पर लोकदल', 'date' => '17 Sep 2026', 'url' => 'img/news/latest-news/news-31.jpeg'],
                                    ['img' => 'video/yt-wE9bWrA-IrI.jpg', 'title' => 'चौधरी सुनील सिंह जी का विशेष पॉडकास्ट — किसान विमर्श (Saargarbhit)', 'date' => '16 Sep 2026', 'url' => 'https://youtu.be/wE9bWrA-IrI?si=G2Phiyf6mh7xUhwC'],
                                    ['img' => 'img/news/latest-news/news-29.jpeg', 'title' => 'बेबाक सवाल पूछना क्या गुनाह? पत्रकार दिव्य श्रीवास्तव के समर्थन में लोकदल', 'date' => '13 Sep 2026', 'url' => 'img/news/latest-news/news-29.jpeg'],
                                    ['img' => 'img/news/latest-news/news-1.jpeg', 'title' => 'चीनी-इथेनॉल नीति पर लोकदल का सरकार पर हमला व सीबीआई जांच की मांग', 'date' => 'Lokdal Press Update', 'url' => 'img/news/latest-news/news-1.jpeg'],
                                ];
                                foreach ($sidebarHighlights as $item):
                                ?>
                                <div class="single-blog-post post-style-2 d-flex align-items-center widget-post mb-2">
                                    <div class="post-thumbnail">
                                        <img src="<?= $item['img']; ?>" alt="" loading="lazy" decoding="async">
                                    </div>
                                    <div class="post-content">
                                        <a href="<?= $item['url']; ?>" target="_blank" class="headline">
                                            <h5 class="mb-1"><?= $item['title']; ?></h5>
                                        </a>
                                        <div class="post-meta">
                                            <p><?= $item['date']; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <!-- Widget Area: Featured Speeches -->
                        <div class="sidebar-widget-area">
                            <h5 class="title" style="background:#b30000; color:#fff; padding:6px 12px; border-radius:4px;"><i class="fa fa-video-camera"></i> 🔴 लाइव वीडियो संबोधन</h5>
                            <div class="widget-content">
                                <!-- Exclusive Video 1 -->
                                <div class="single-blog-post mb-3" style="border: 2px solid #b30000; border-radius: 6px; padding: 6px; background: #fff5f5;">
                                    <div class="post-thumbnail" style="position: relative;">
                                        <img src="img/news/latest-news/news-78.jpeg" alt="हिरासत बस से लाइव संदेश" style="width: 100%; height: 160px; object-fit: cover; border-radius: 4px;" loading="lazy" decoding="async">
                                        <a href="video/wp-video-7.mp4" target="_blank" class="video-btn"><i class="fa fa-play"></i></a>
                                        <span style="position: absolute; top: 6px; left: 6px; background: #ff0000; color: #fff; font-size: 10px; font-weight: 700; padding: 2px 6px; border-radius: 3px;">🔴 EXCLUSIVE</span>
                                    </div>
                                    <div class="post-content pt-2">
                                        <a href="video/wp-video-7.mp4" target="_blank" class="headline">
                                            <h5 style="color: #b30000; font-size: 13.5px; font-weight: 700;">जंतर-मंतर: दिल्ली पुलिस हिरासत बस से राष्ट्रीय अध्यक्ष चौधरी सुनील सिंह का लाइव संदेश</h5>
                                            <div class="post-meta"><p style="color: #666; font-size: 11px;">जेल भरो आंदोलन Live Video - 02 Oct 2026</p></div>
                                        </a>
                                    </div>
                                </div>
                                <!-- Exclusive Video 2 -->
                                <div class="single-blog-post mb-3" style="border: 2px solid #e67e22; border-radius: 6px; padding: 6px; background: #fff9f5;">
                                    <div class="post-thumbnail" style="position: relative;">
                                        <img src="video/wp-video-8-thumb.jpg" alt="जंतर-मंतर ग्राउंड कवरेज" style="width: 100%; height: 160px; object-fit: cover; border-radius: 4px;" loading="lazy" decoding="async">
                                        <a href="video/wp-video-8.mp4" target="_blank" class="video-btn"><i class="fa fa-play"></i></a>
                                        <span style="position: absolute; top: 6px; left: 6px; background: #e67e22; color: #fff; font-size: 10px; font-weight: 700; padding: 2px 6px; border-radius: 3px;">🔴 GROUND REPORT</span>
                                    </div>
                                    <div class="post-content pt-2">
                                        <a href="video/wp-video-8.mp4" target="_blank" class="headline">
                                            <h5 style="color: #b30000; font-size: 13.5px; font-weight: 700;">जंतर-मंतर ग्राउंड: धारा 163 के बीच नेशनल मीडिया व भारी पुलिस बल कवरेज</h5>
                                            <div class="post-meta"><p style="color: #666; font-size: 11px;">जंतर-मंतर ग्राउंड रिपोर्ट - 02 Oct 2026</p></div>
                                        </a>
                                    </div>
                                </div>
                                <div class="single-blog-post mb-3">
                                    <div class="post-thumbnail">
                                        <img src="https://img.youtube.com/vi/1sJB7x3NSOE/hqdefault.jpg" alt="" loading="lazy" decoding="async">
                                        <a href="https://youtu.be/1sJB7x3NSOE?si=zaO4LPSMuI9tBriI" target="_blank" class="video-btn"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="post-content">
                                        <a href="https://youtu.be/1sJB7x3NSOE?si=zaO4LPSMuI9tBriI" target="_blank" class="headline">
                                            <h5>अखिलेश यादव का बड़ा दांव! जयंत चौधरी बनाम सुनील सिंह</h5>
                                            <div class="post-meta"><p>YBN News (YouTube)</p></div>
                                        </a>
                                    </div>
                                </div>
                                <div class="single-blog-post mb-3">
                                    <div class="post-thumbnail">
                                        <img src="https://img.youtube.com/vi/UU1yv-FN344/hqdefault.jpg" alt="" loading="lazy" decoding="async">
                                        <a href="https://youtu.be/UU1yv-FN344?si=RAZzzR4t9sMS1g80" target="_blank" class="video-btn"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="post-content">
                                        <a href="https://youtu.be/UU1yv-FN344?si=RAZzzR4t9sMS1g80" target="_blank" class="headline">
                                            <h5>चौधरी सुनील सिंह जी का विशेष वीडियो संदेश — SIR मतदाता सूची विमर्श</h5>
                                            <div class="post-meta"><p>Lokdal Official YouTube</p></div>
                                        </a>
                                    </div>
                                </div>
                                <div class="single-blog-post mb-0">
                                    <div class="post-thumbnail">
                                        <img src="https://img.youtube.com/vi/HbrkBb0k52k/hqdefault.jpg" alt="" loading="lazy" decoding="async">
                                        <a href="https://youtu.be/HbrkBb0k52k?si=JO7X4H9lkIJ0Porm" target="_blank" class="video-btn"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="post-content">
                                        <a href="https://youtu.be/HbrkBb0k52k?si=JO7X4H9lkIJ0Porm" target="_blank" class="headline">
                                            <h5>राहुल गांधी से मुलाकात व 2027 उत्तर प्रदेश चुनावी रणनीति</h5>
                                            <div class="post-meta"><p>Lokdal Exclusive Video</p></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Widget Area: Election 2029 & Membership CTA -->
                        <div class="sidebar-widget-area">
                            <h5 class="title">संगठन से जुड़ें</h5>
                            <div class="widget-content text-center">
                                <p class="mb-3">चौधरी चरण सिंह जी के विचारों एवं किसान-मजदूर-युवा अधिकारों की लड़ाई को मजबूत करने के लिए आज ही लोकदल से जुड़ें।</p>
                                <a href="join.php" class="btn btn-success btn-block mb-2" style="background-color: #00772D; border-color: #00772D; border-radius: 0;">Join Lokdal (सदस्यता लें)</a>
                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSednDV-de3A7rTE0hFb0Xx5iBopY8HuwY1DIGM6kYZ4_7CEsw/viewform" target="_blank" class="btn btn-success btn-block" style="background-color: #00772D; border-color: #00772D; border-radius: 0;">लोकसभा चुनाव 2029 हेतु आवेदन</a>
                            </div>
                        </div>
                    </div>
                </div>
            