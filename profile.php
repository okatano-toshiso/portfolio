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
            <h1><?php the_field('surname'); ?>　<?php the_field('given_name'); ?><span style="font-size:12px; margin-left:15px;"><?php the_field('surname_alphabet'); ?>　<?php the_field('given_name_alphabet'); ?></span></h1>
        </div>
    </div>
    <hr />
    <div class="row">
        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
            <div class="media">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <img class="media-object img-rounded pb_30" src="<?php the_field('photo'); ?>" alt="プロフィール画像" style="width:150px; margin:0 auto;">
                    <div class="takasa30"></div>
                    <a class="resumebtn" href="https://profile.nuevo.jp/wp-content/uploads/2022_%E5%B1%A5%E6%AD%B4%E6%9B%B8.pdf" target="_blank" role="button">履歴書</a>
                    <a class="resumebtn" href="https://profile.nuevo.jp/wp-content/uploads/2022_%E8%81%B7%E5%8B%99%E7%B5%8C%E6%AD%B4%E6%9B%B8.pdf" target="_blank" role="button">職務経歴書</a>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <h2 class="media-heading" style="margin-bottom:30px;"><?php the_field('position'); ?></h2>
                    <h3>
                        <?php echo get_field_object('pr')['label']; ?>
                    </h3>
                    <p class="pr">
                        <?php the_field('pr'); ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 well">
            <div class="row zero">
                <div class="col-lg-12 zero">
                    <p><?php echo get_field_object('birth')['label']; ?> : <?php the_field('birth'); ?></p>
                </div>
                <div class="col-lg-12 zero">
                    <p><?php echo get_field_object('tel')['label']; ?> : <?php the_field('tel'); ?></p>
                </div>
                <div class="col-lg-12 zero">
                    <p><?php echo get_field_object('mail')['label']; ?> : <?php the_field('mail'); ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <h4>
                        <?php echo get_field_object('address')['label']; ?>
                    </h4>
                    <p style="line-height:180%;">
                        <?php echo get_field_object('post_code')['label']; ?> : <?php the_field('post_code'); ?>
                    </p>
                    <p style="line-height:180%;">
                        <?php the_field('address'); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</article>
<hr />
<article class="container">
    <div class="row">
        <div class="col-lg-7 col-md-7 col-sm-8 col-xs-12">
            <h2><?php echo get_field_object('university_name')['label']; ?></h2>
            <hr />
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <h4>
                        <?php the_field('university_name'); ?>
                    </h4>
                    <span class="label label-default">
                        <?php the_field('university_faculty'); ?><?php echo get_field_object('university_faculty')['label']; ?>
                        <?php the_field('university_department'); ?><?php echo get_field_object('university_department')['label']; ?>
                    </span>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-left">
                    <h4>
                        <?php echo get_field_object('university_period_enter')['label']; ?>
                    </h4>
                    <p><?php the_field('university_period_enter'); ?> - <?php the_field('university_period_leaving'); ?></p4>
                </div>
            </div>
            <h4>
                <?php echo get_field_object('university_activities')['label']; ?>
            </h4>
            <p>
                <?php the_field('university_activities'); ?>
            </p>
            <div class="haba90 text-center">
                <img src="<?php the_field('university_img'); ?>" alt="..." style="width:90%; margin:0 auto;"/>
            </div>
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
        <div class="col-lg-5 col-md-5 col-sm-4 col-xs-12">
            <h2>Skill Set</h2>
            <hr>

<div class="progress-container">
    <h3>Front End</h3>
    <?php
        $frontend = array(
            get_field_object('html')['label'] => get_field('html'),
            get_field_object('css')['label'] => get_field('css'),
            get_field_object('scss')['label'] => get_field('scss'),
            get_field_object('javascript')['label'] => get_field('javascript'),
            get_field_object('jquery')['label'] => get_field('jquery'),
            get_field_object('vuejs')['label'] => get_field('vuejs'),
            get_field_object('react')['label'] => get_field('react'),
            get_field_object('node')['label'] => get_field('node')
        );
        foreach ($frontend as $key => $value) {
            if ($value !== 0 && !empty($value)){
                echo "<div class='progress'>";
                echo "<div class='progress-bar' role='progressbar' aria-valuenow='$value' aria-valuemin='0' aria-valuemax='100' style='width: $value%;'>$key</div>";
                echo "</div>";
            }
        }
    ?>
</div>
<div class="progress-container">
    <h3>Back End</h3>
    <?php
        $backend = array(
            get_field_object('php')['label'] => get_field('php'),
            get_field_object('python')['label'] => get_field('python'),
            get_field_object('java')['label'] => get_field('java'),
            get_field_object('go')['label'] => get_field('go'),
            get_field_object('ruby')['label'] => get_field('ruby'),
            get_field_object('perl')['label'] => get_field('perl'),
            get_field_object('vb')['label'] => get_field('vb'),
            get_field_object('r')['label'] => get_field('r'),
            get_field_object('dart')['label'] => get_field('dart')
        );
        foreach ($backend as $key => $value) {
            if ($value !== 0 && !empty($value)){
                echo "<div class='progress'>";
                echo "<div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow='$value' aria-valuemin='0' aria-valuemax='100' style='width: $value%;'>$key</div>";
                echo "</div>";
            }
        }
    ?>
</div>

<div class="progress-container">
    <h3>Develop Tool</h3>
    <?php
        $development = array(
            get_field_object('git')['label'] => get_field('git'),
            get_field_object('docker')['label'] => get_field('docker'),
            get_field_object('ci')['label'] => get_field('ci'),
            get_field_object('gulp')['label'] => get_field('gulp'),
            get_field_object('vite')['label'] => get_field('vite'),
            get_field_object('flutter')['label'] => get_field('flutter')
        );
        foreach ($development as $key => $value) {
            if ($value !== 0 && !empty($value)){
                echo "<div class='progress'>";
                echo "<div class='progress-bar progress-bar-danger' role='progressbar' aria-valuenow='$value' aria-valuemin='0' aria-valuemax='100' style='width: $value%;'>$key</div>";
                echo "</div>";
            }
        }
    ?>
</div>

<div class="progress-container">
    <h3>FrameWorks & CMS</h3>
    <?php
        $frameworks = array(
            get_field_object('laravel')['label'] => get_field('laravel'),
            get_field_object('cakephp')['label'] => get_field('cakephp'),
            get_field_object('codeigniter')['label'] => get_field('codeigniter'),
            get_field_object('smarty')['label'] => get_field('smarty'),
            get_field_object('fuel')['label'] => get_field('fuel'),
            get_field_object('wordpress')['label'] => get_field('wordpress'),
            get_field_object('movabletype')['label'] => get_field('movabletype'),
            get_field_object('aws')['label'] => get_field('aws'),
            get_field_object('azure')['label'] => get_field('azure'),
            get_field_object('gcp')['label'] => get_field('gcp'),
            get_field_object('ai')['label'] => get_field('ai'),
            get_field_object('apatch')['label'] => get_field('apatch'),
            get_field_object('nginx')['label'] => get_field('nginx'),
            get_field_object('mySql')['label'] => get_field('mySql')
        );
        foreach ($frameworks as $key => $value) {
            if ($value !== 0 && !empty($value)){
                echo "<div class='progress'>";
                echo "<div class='progress-bar progress-bar-warning' role='progressbar' aria-valuenow='$value' aria-valuemin='0' aria-valuemax='100' style='width: $value%;'>$key</div>";
                echo "</div>";
            }
        }
    ?>
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
