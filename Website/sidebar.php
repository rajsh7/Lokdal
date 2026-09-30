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
                            <h5 class="title">विशेष वीडियो संबोधन</h5>
                            <div class="widget-content">
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
            