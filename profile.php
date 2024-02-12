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
        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
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
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 well">
            <div class="row zero">
                <div class="col-lg-12 zero">
                    <?php
                        $birthday =  get_field('birth');
                        $current_date = date("Y-m-d");
                        $birthday_obj = new DateTime($birthday);
                        $current_date_obj = new DateTime($current_date);
                        $age = $current_date_obj->diff($birthday_obj)->y;
                    ?>
                    <p><b><?php echo get_field_object('birth')['label']; ?></b></p>
                    <p><?php the_field('birth'); echo " ({$age}歳)"?></p>
                </div>
                <div class="col-lg-12 zero">
                    <p><b><?php echo get_field_object('tel')['label']; ?></b></p>
                    <p><?php the_field('tel'); ?></p>
                </div>
                <div class="col-lg-12 zero">
                    <p><b><?php echo get_field_object('mail')['label']; ?></b></p>
                    <p><?php the_field('mail'); ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <p><b><?php echo get_field_object('address')['label']; ?></b></p>
                    <?php echo get_field_object('post_code')['label']; ?>：<?php the_field('post_code'); ?><br />
                    <?php the_field('address'); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <hr />
        <article class="sns_fields">
            <h2 class="sns_label">SNSアカウント</h2>
            <?php for ($i = 1; $i < 6; $i++): ?>
                <?php if(get_field('sns_'.$i.'_name')): ?>
                    <article class="sns">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 center">
                            <a href="<?php the_field('sns_'.$i.'_url'); ?>" target="_blank" class="sns_link" >
                                <figure class="sns_image">
                                    <img class="sns_logo" src="<?php the_field('sns_'.$i.'_image'); ?>" />
                                </figure>
                                <p class="sns_name">
                                    <?php the_field('sns_'.$i.'_name'); ?>
                                </p>
                            </a>
                        </div>
                    </article>
                <?php endif; ?>
            <?php endfor; ?>
        </article>
    </div>
    <hr />
</article>
<article class="container">
    <div class="row">
        <div class="col-lg8 col-md-8 col-sm-8 col-xs-12">
            <h2 class="university"><?php echo get_field_object('university_name')['label']; ?></h2>
            <hr />
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="university_contents">
                        <h4 class="university_name">
                            <?php the_field('university_name'); ?>
                        </h4>
                        <ul class="university_label">
                            <li class="university_label-list">
                                <p class="university_label-text">
                                    <?php the_field('university_faculty'); ?><?php echo get_field_object('university_faculty')['label']; ?>
                                </p>
                            </li>
                            <li>
                                <p class="university_label-text">
                                    <?php the_field('university_department'); ?><?php echo get_field_object('university_department')['label']; ?>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-left">
                    <div class="university_contents">
                        <p class="university_period">
                            <b><?php echo get_field_object('university_period_enter')['label']; ?></b>
                        </p>
                        <p class="university_period">
                            <?php the_field('university_period_enter'); ?> - <?php the_field('university_period_leaving'); ?>
                        </p>
                    </div>
                </div>
            </div>
            <h4 class="university_name">
                <?php echo get_field_object('university_activities')['label']; ?>
            </h4>
            <p>
                <?php the_field('university_activities'); ?>
            </p>
            <div class="haba90 text-center pt_30">
                <img src="<?php the_field('university_img'); ?>" alt="..." style="width:90%; margin:0 auto;"/>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
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
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <h2 class="qualification">保有資格</h2>
            <hr />
            <?php for ($i = 1; $i < 20; $i++): ?>
                <?php if(get_field('qualification_'.$i.'_name')): ?>
                    <article class="qualification-contents">
                        <div class="qualification-label qualification-row">
                            <dl class="qualification-badge">
                                <?php if(get_field('qualification_'.$i.'_badge')): ?>
                                    <figure class="qualification-badge__image">
                                        <img src="<?php $badge_img = get_field('qualification_'.$i.'_badge'); echo $badge_img["url"];?>" alt="<?php echo get_field_object('qualification_'.$i.'_badge')['label']; ?>" />
                                    </figure>
                                <?php endif; ?>
                                <?php if(get_field('qualification_'.$i.'_name')): ?>
                                    <p class="qualification-text"><?php the_field('qualification_'.$i.'_name'); ?></p>
                                <?php endif; ?>
                            </dl>
                        </div>
                        <?php if(get_field('qualification_'.$i.'_acquisition')): ?>
                            <div class="qualification-acquisition qualification-label">
                                <?php echo get_field_object('qualification_'.$i.'_acquisition')['label']; ?>：
                                <?php
                                    $date_raw = get_field('qualification_'.$i.'_acquisition');
                                    $date_formatted = date("Y-m", strtotime($date_raw));
                                    echo $date_formatted;
                                ?>
                            </div>
                        <?php endif; ?>
                        <?php if(get_field('qualification_'.$i.'_type')): ?>
                            <div class="qualification-label qualification-label">
                                <?php echo get_field_object('qualification_'.$i.'_type')['label']; ?>：<?php the_field('qualification_'.$i.'_type'); ?>
                            </div>
                        <?php endif; ?>
                        <?php if(get_field('qualification_'.$i.'_image')): ?>
                            <div class="qualification-image qualification-label">
                                <figure>
                                    <img src="<?php the_field('qualification_'.$i.'_image'); ?>" alt="<?php echo get_field_object('qualification_'.$i.'_image')['label']; ?>" />
                                </figure>
                            </div>
                        <?php endif; ?>
                    </article>
                    <hr />
                <?php endif; ?>
            <?php endfor; ?>
        </div>
    </div>
    <hr />
    <article class="history">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h2>職歴</h2>
                <div class="history_content">
                    <?php for ($i = 20; $i > 0; $i--): ?>
                        <?php if(get_field('job_'.$i.'_name')): ?>
                            <div class="history_area">
                                <div class="history_field">
                                    <h3 class="history_title"><?php the_field('job_'.$i.'_name') ?></h3>
                                </div>
                                <div class="history_block">
                                    <div class="history_frame">
                                        <img src="<?php the_field('job_'.$i.'_img') ?>" class="history_image"/>
                                    </div>
                                    <div class="history_data">
                                        <ul class="history_list">
                                            <li>
                                                <?php echo get_field_object('job_'.$i.'_period_hire')['label']; ?>：
                                                <?php
                                                    $date_raw = get_field('job_'.$i.'_period_hire');
                                                    $date_formatted = date("Y-m", strtotime($date_raw));
                                                    echo $date_formatted;
                                                ?>
                                                〜
                                                <?php
                                                    $date_raw = get_field('job_'.$i.'_period_leave');
                                                    if ($date_raw == '') {
                                                        $date_raw = date("Y-m-d H:i:s");
                                                    }
                                                    $date_formatted = date("Y-m", strtotime($date_raw));
                                                    echo $date_formatted;
                                                ?>
                                            </li>
                                            <li>
                                                <?php echo get_field_object('job_'.$i.'_income')['label']; ?>：
                                                <?php the_field('job_'.$i.'_income') ?>円
                                            </li>
                                            <li>
                                                <?php echo get_field_object('job_'.$i.'_type')['label']; ?>：
                                                <?php the_field('job_'.$i.'_type') ?>
                                            </li>
                                            <li>
                                                <?php echo get_field_object('job_'.$i.'_number')['label']; ?>：
                                                <?php the_field('job_'.$i.'_number') ?>
                                            </li>
                                            <li>
                                                <?php echo get_field_object('job_'.$i.'_capital')['label']; ?>：
                                                <?php the_field('job_'.$i.'_capital') ?>
                                            </li>
                                            <li>
                                                <?php
                                                    if(get_field('job_'.$i.'_url')):
                                                ?>
                                                    <a href="<?php the_field('job_'.$i.'_url') ?>" target="_blank"><?php echo get_field_object('job_'.$i.'_url')['label']; ?></a>
                                                <?php
                                                    endif;
                                                ?>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="history_text">
                                    <span class="label label-default"><?php the_field('job_'.$i.'_role') ?></span>
                                    <?php the_field('job_'.$i.'_explanation') ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </article>
</article>
<?php get_footer(); ?>
