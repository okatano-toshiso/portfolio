<?php
/*
Template Name:  profile
*/
?>
<?php get_header(); ?>
<div id="slideimage2" style="background-image:url(<?php the_field('logo', 247); ?>)" class="text-center">
    <div class="takasa60 hidden-lg hidden-md hidden-xs"></div>
    <h1>PROFILE</h1>
</div>
<article class="container">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <h1>岡田　敏裕<span style="font-size:12px; margin-left:15px;">okada toshihiro</span></h1>
        </div>
    </div>
    <hr />
    <div class="row">
        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
            <div class="media">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <img class="media-object img-rounded" src="<?php the_field('photo'); ?>" alt="プロフィール画像" style="width:150px; margin:0 auto;">
                    <div class="takasa30"></div>
                    <a class="resumebtn" href="https://profile.nuevo.jp/wp-content/uploads/2022_%E5%B1%A5%E6%AD%B4%E6%9B%B8.pdf" target="_blank" role="button">履歴書</a>
                    <a class="resumebtn" href="https://profile.nuevo.jp/wp-content/uploads/2022_%E8%81%B7%E5%8B%99%E7%B5%8C%E6%AD%B4%E6%9B%B8.pdf" target="_blank" role="button">職務経歴書</a>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <h2 class="media-heading" style="margin-bottom:30px;">Web Creator / Web Director</h2>
                    <div class="pr">
                        <?php the_field('pr'); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 well">
            <div class="row zero">
                <div class="col-lg-12 zero">
                    <h4>誕生日 : 1978年1月22日（満40歳）</h4>
                </div>
                <div class="col-lg-12 zero">
                    <h4>電話番号 : 090-6480-0122</h4>
                </div>
                <div class="col-lg-12 zero">
                    <h4>メールアドレス : okadub@coda.ocn.ne.jp</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <h4 style="line-height:180%;"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>〒270−0114<br />千葉県流山市東初石１−１６９−４７</h4>
                </div>
            </div>
        </div>
    </div>
</article>
<hr />
<article class="container">
    <div class="row">
        <div class="col-lg-7 col-md-7 col-sm-8 col-xs-12">
            <h2>学歴</h2>
            <hr />
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <h4>東洋大学</h4>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <h4 class="text-right"> 1998/4 - 2002/3</h4>
                </div>
            </div>
            <h4><span class="label label-default">社会学部　社会学科</span></h4>
            <p>
                社会学部の中でメディア社会学を研究。携帯電話、モバイルの普及により社会の構造がどのように変化するか、コミュニケーションのあり方がどのように変わっていくのかを研究しておりました。在学中にHTML、
                CSSなどのマークアップ言語を勉強。
            </p>
            <div class="haba90 text-center">
                <img src="<?php the_field('univercity'); ?>" alt="..." style="width:90%; margin:0 auto;"/>
            </div>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-4 col-xs-12">
            <h2>Skill Set</h2>
            <hr>
            <!-- Green Progress Bar -->
            <div class="progress">
                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 95%"> HTML</div>
            </div>
            <!-- Blue Progress Bar -->
            <div class="progress">
                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 90%"> CSS</div>
            </div>
            <!-- Yellow Progress Bar -->
            <div class="progress">
                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 60%"> JAVASCRIPT</div>
            </div>
            <!-- Red Progress Bar -->
            <div class="progress">
                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%"> PHP</div>
            </div>
            <div class="progress">
                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 55%"> VBA</div>
            </div>
            <div class="progress">
                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 80%"> WORDPRESS</div>
            </div>
            <div class="progress">
                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> cake PHP</div>
            </div>
            <div class="progress">
                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 80%"> apatch</div>
            </div>
            <div class="progress">
                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> nginx</div>
            </div>
            <div class="progress">
                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 60%">mySQL</div>
            </div>
            <div class="progress">
                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 90%"> PHOTOSHOP</div>
            </div>
            <div class="progress">
                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 75%"> ILLUSTRATOR</div>
            </div>
            <div class="progress">
                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 60%"> FLASH</div>
            </div>
            <div class="progress">
                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 90%"> EXCEL</div>
            </div>
            <div class="progress">
                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 90%"> WORD</div>
            </div>
            <div class="progress">
                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 90%"> POWERPOINT</div>
            </div>
            <div class="progress">
                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 70%"> ACCESS</div>
            </div>
        </div>
    </div>
    <hr>
<div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h2>保有資格</h2>
        </div>
        <div class="haba90">
            <ul class="zero">
                <li class="zero" style="font-size:14px;"><i class="fa fa-university" aria-hidden="true"></i>　普通自動車第一種免許（国家資格）</li>
                <li class="zero" style="font-size:14px;"><i class="fa fa-university" aria-hidden="true"></i>　初級システムアドミニストレータ（国家資格）</li>
                <li class="zero" style="font-size:14px;"><i class="fa fa-university" aria-hidden="true"></i>　基本情報処理技術者（国家資格）</li>
                <li class="zero" style="font-size:14px;"><i class="fa fa-university" aria-hidden="true"></i>　情報セキュリティマネジメント（国家資格）</li>
                <li class="zero" style="font-size:14px;"><i class="fa fa-university" aria-hidden="true"></i>　ＷＥＢデザイン技能検定２級（国家検定）</li>
                <li class="zero" style="font-size:14px;"><i class="fa fa-university" aria-hidden="true"></i>　ＷＥＢデザイン技能検定３級（国家検定）</li>
                <li class="zero" style="font-size:14px;"><i class="fa fa-university" aria-hidden="true"></i>　ＶＢＡエキスパート</li>
                <li class="zero" style="font-size:14px;"><i class="fa fa-university" aria-hidden="true"></i>　マイクロソフトオフィススペシャリストマスター（Excel2003 Word2003 Powerpoint2003 Access2003）</li>
                <li class="zero" style="font-size:14px;"><i class="fa fa-university" aria-hidden="true"></i>　.com Master ★ 2005</li>
                <li class="zero" style="font-size:14px;"><i class="fa fa-university" aria-hidden="true"></i>　Google Adwords Partner認定資格</li>
            </ul>
        </div>
    </div>
    <div class='row'>
        <div class='col-md-12'>
            <div class="carousel slide media-carousel" id="media">
                <div class="carousel-inner">
                    <div class="item  active">
                        <div class="row">
                            <div class="col-md-4 skillframe">
                                <a class="thumbnail" href="<?php the_field('skill01'); ?>" target="_blank"><img src="<?php the_field('skill01'); ?>" alt="..." style="width:90%; margin:0 auto;" /></a>
                            </div>
                            <div class="col-md-4 skillframe">
                                <a class="thumbnail" href="<?php the_field('skill02'); ?>" target="_blank"><img src="<?php the_field('skill02'); ?>" alt="..." style="width:90%; margin:0 auto;" /></a>
                            </div>
                            <div class="col-md-4 skillframe">
                                <a class="thumbnail" href="<?php the_field('skill03'); ?>" target="_blank"><img src="<?php the_field('skill03'); ?>" alt="..." style="width:90%; margin:0 auto;" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-md-4 skillframe">
                                <a class="thumbnail" href="<?php the_field('skill04'); ?>" target="_blank"><img src="<?php the_field('skill04'); ?>" alt="..." style="width:90%; margin:0 auto;" /></a>
                            </div>
                            <div class="col-md-4 skillframe">
                                <a class="thumbnail" href="<?php the_field('skill05'); ?>" target="_blank"><img src="<?php the_field('skill05'); ?>" alt="..." style="width:90%; margin:0 auto;" /></a>
                            </div>
                            <div class="col-md-4 skillframe">
                                <a class="thumbnail" href="<?php the_field('skill06'); ?>" target="_blank"><img src="<?php the_field('skill06'); ?>" alt="..." style="width:90%; margin:0 auto;" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-md-4 skillframe">
                                <a class="thumbnail" href="<?php the_field('skill07'); ?>" target="_blank"><img src="<?php the_field('skill07'); ?>" alt="..." style="width:90%; margin:0 auto;" /></a>
                            </div>
                            <div class="col-md-4 skillframe">
                                <a class="thumbnail" href="<?php the_field('skill08'); ?>" target="_blank"><img src="<?php the_field('skill08'); ?>" alt="..." style="width:90%; margin:0 auto;" /></a>
                            </div>
                            <div class="col-md-4 skillframe">
                                <a class="thumbnail" href="<?php the_field('skill09'); ?>" target="_blank"><img src="<?php the_field('skill09'); ?>" alt="..." style="width:90%; margin:0 auto;" /></a>
                            </div>
                        </div>
                    </div>
                </div>
                <a data-slide="prev" href="#media" class="left carousel-control">‹</a>
                <a data-slide="next" href="#media" class="right carousel-control">›</a>
            </div>
        </div>
    </div>
<hr />
<h2>職歴</h2>
<hr />
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h4>タワーレコード株式会社</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                <div style="background-image:url(<?php the_field('job01'); ?>); width:300px; height:200px; background-position:top center; background-size:cover; margin:0 auto;"></div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
            <p><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> 2003/7 - 2005/3</p>
            <p>年収：２１６万円</p>
            <p>雇用形態：契約社員</p>
            <p>資本金：－</p>
            <p>従業員数：２００人</p>
        </div>
    </div>
    <div class="takasa15"></div>
        <h4><span class="label label-default">アシスタントバイヤー</span></h4>
        <div class="takasa15"></div>
        <p>タワーレコードオンラインのＤＶＤのアシスタントバイヤーを経験。ＤＶＤの商品データ入力作業、ＤＶＤの特設ページの制作、映像会社との渉外業務を担当。タワーレコード限定のパッケージングやグッズの手配、及びライセンスの確保を担当しておりました。</p>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h4>株式会社レコード新聞社</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
            <div style="background-image:url(<?php the_field('job02'); ?>); width:300px; height:200px; background-position:top center; background-size:cover; margin:0 auto;"></div>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
            <p><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> 2005/10 - 2006/8</p>
            <p>年収：２１６万円</p>
            <p>雇用形態：正社員</p>
            <p>資本金：－</p>
            <p>従業員数：１０人</p>
        </div>
    </div>
    <div class="takasa15"></div>
    <h4><span class="label label-default">雑誌編集者</span></h4>
    <div class="takasa15"></div>
        <p>Ｂ to Ｂ向けの音楽カタログ雑誌の編集、オペレーションを担当。原稿の執筆やライターとの制作進行管理も兼任しておりました。</p>
    </div>
</div>
<div style="width:100%; height:30px;"></div>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h4>株式会社ＶＩＢＥ</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                    <div style="background-image:url(<?php the_field('job03'); ?>); width:300px; height:200px; background-position:top center; background-size:cover; margin:0 auto;"></div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                    <p><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> 2006/9 - 2008/3</p>
                    <p>年収：３００万円</p>
                    <p>雇用形態：契約社員</p>
                    <p>資本金：－</p>
                    <p>従業員数：１０人</p>
                </div>
            </div>
            <h4><span class="label label-default">モバイルサイト運営</span></h4>
            <p>ＨＭＶの着メロ、着うた、着うたフルのモバイルサイト、自社モバイルサイト、スノーボーダー向けのモバイルサイトの運営をしておりました。計７サイトの運営・管理に関わることで多くのことを学べました。</p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h4>株式会社オリコンＭＥ</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                    <div style="background-image:url(<?php the_field('job04'); ?>); width:300px; height:200px; background-position:top center; background-size:cover; margin:0 auto;"></div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                    <p><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> 2008/4 - 2009/3</p>
                    <p>年収：３３０万円</p>
                    <p>雇用形態：正社員</p>
                    <p>資本金：－</p>
                    <p>従業員数：２５０人</p>
                </div>
            </div>
            <h4><span class="label label-default">モバイルサイト運営</span></h4>
            <p>オリコンの自社モバイルサイトの運営管理を担当。</p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h4>株式会社スピードスターミュージック</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                    <div style="background-image:url(<?php the_field('job05'); ?>); width:300px; height:200px; background-position:top center; background-size:cover;margin:0 auto;"></div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                    <p><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> 2009/5 - 2010/3</p>
                    <p>年収：４５０万円</p>
                    <p>雇用形態：正社員</p>
                    <p>資本金：－</p>
                    <p>従業員数：１０人</p>
                </div>
            </div>
            <h4><span class="label label-default">ＷＥＢ担当</span></h4>
            <p>所属アーティストのサイト制作、構築から運営管理を担当。社内インフラ整備も担当しておりました。</p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h4>株式会社インデックス</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                    <div style="background-image:url(<?php the_field('job06'); ?>); width:300px; height:200px; background-position:top center; background-size:cover; margin:0 auto;"></div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                    <p><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> 2010/4 - 2011/3</p>
                    <p>年収：４００万円</p>
                    <p>雇用形態：正社員</p>
                    <p>資本金：－</p>
                    <p>従業員数：４００人</p>
                </div>
            </div>
            <h4><span class="label label-default">サイトディレクター</span></h4>
            <p>テレビ朝日のモバイルサイト運営管理。１００満人以上の大規模サイトの運営とテレビ局との渉外業務を担当しておりました。</p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h4>アットザラウンジ株式会社</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                    <div style="background-image:url(<?php the_field('job07'); ?>); width:300px; height:200px; background-position:top center; background-size:cover; margin:0 auto;"></div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                    <p><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> 2012/12 - 2013/7</p>
                    <p>年収：３００万円</p>
                    <p>雇用形態：契約社員</p>
                    <p>資本金：－</p>
                    <p>従業員数：４人</p>
                </div>
            </div>
            <h4><span class="label label-default">ＷＥＢ担当</span></h4>
            <p>知人の会社に契約社員としてヘルプで勤務。電子書籍サイトの運営管理をしていました。EC-CUBEによるサイト構築、修正業務。</p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h4>株式会社ＤＡＣホールディングス</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                    <div style="background-image:url(<?php the_field('job08'); ?>); width:300px; height:200px; background-position:top center; background-size:cover; margin:0 auto;"></div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                    <p><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> 2014/1 - 2017/6</p>
                    <p>年収：４００万円</p>
                    <p>雇用形態：正社員</p>
                    <p>資本金：－</p>
                    <p>従業員数：５００人</p>
                </div>
            </div>
            <h4><span class="label label-default">ＷＥＢクリエイター</span></h4>
            <p>広告バナー作成、ｗｅｂサイト制作及び構築、サーバ構築、システム開発を担当。ｗｅｂ案件を制作・開発会社にすべてアウトソーシングするという会社の決定により転職を決意。</p>
        </div>
    </div>
</article>
<?php get_footer(); ?>
