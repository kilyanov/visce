<?php

use yii\helpers\Html;

$this->title = Yii::t('app', 'Vice - International IT company');

?>

<div class="ui" id="video_section">
    <button class="ui inverted button big project_disc" data-bs-toggle="modal" data-bs-target="#exampleModal" >
        <?= Yii::t('app', 'Discuss the project') ?>
    </button>
    <video id="nubexVideo" width="100%" height="auto" autoplay muted playsInline loop src="/media/videos/background_video.mp4"></video>
</div>

<div class="ui container fluid section wow fadeIn">
    <div class="ui section-title" style="font-size: 20px;">
        <div class="ui huge header center aligned" id="aboutUs">
            <?= Yii::t('app', 'The best in their field');?>
        </div>
    </div>

    <div class="ui container section-desc">
        <p style="text-align: justify;">
            <?= Yii::t('app', 'A rapidly progressing company providing services for the automation of business processes and qualified application development. Over a long period of cooperation with various companies, we have been able to prove ourselves as professionals in our field. By contacting us, you will get peace of mind and confidence, which is why we have customers with whom cooperation has been going on for years and we mutually appreciate such relationships.');?>
        </p>
    </div>
</div>

<div class="ui container fluid section wow fadeIn">
    <div class="ui section-title" style="font-size: 20px;">
        <div class="ui huge header center aligned">
            <?= Yii::t('app', 'Our services');?>
        </div>
    </div>

    <div class="services" id="services">
        <div class="ui service_block">
            <img class="ui medium image" src="/media/img/services/automation.webp">
            <p>
                <?= Yii::t('app', 'Automation of business processes');?>
            </p>
        </div>
        <div class="ui service_block">
            <img class="ui medium image" src="/media/img/services/crm.webp">
            <p>
                <?= Yii::t('app', 'CRM systems');?>
            </p>
        </div>
        <div class="ui service_block">
            <img class="ui medium image" src="/media/img/services/database.webp">
            <p>
                <?= Yii::t('app', 'Database development');?>
            </p>
        </div>
        <div class="ui service_block">
            <img class="ui medium image" src="/media/img/services/mobile.webp">
            <p>
                <?= Yii::t('app', 'Mobile applications');?>
            </p>
        </div>
        <div class="ui service_block">
            <img class="ui medium image" src="/media/img/services/saas.webp">
            <p>
                <?= Yii::t('app', 'Cloud solution');?>
            </p>
        </div>
        <div class="ui service_block">
            <img class="ui medium image" src="/media/img/services/api.webp">
            <p>
                <?= Yii::t('app', 'API Integration');?>
            </p>
        </div>
        <div class="ui service_block">
            <img class="ui medium image" src="/media/img/services/support.webp">
            <p>
                <?= Yii::t('app', 'Technical audit');?>
            </p>
        </div>
        <div class="ui service_block all_services">
            <?php
                $link = '<div class="text"><span>' . Yii::t('app', 'All services') . '</span></div>';
                echo Html::a($link, ['/services']);
            ?>
        </div>
    </div>
</div>

<div class="ui container fluid section wow fadeIn" id="running_line">
    <div class='marquee' style='overflow:hidden'>
        <div class="ui partner">
            <img class="ui small image" src="/media/img/partners/1533819539188148763.webp">
        </div>
        <div class="ui partner">
            <img class="ui small image" src="/media/img/partners/part6.webp">
        </div>
        <div class="ui partner">
            <img class="ui small image" src="/media/img/partners/lukoil.webp">
        </div>
        <div class="ui partner">
            <img class="ui small image" src="/media/img/partners/??????????????.webp">
        </div>
        <div class="ui partner">
            <img class="ui small image" src="/media/img/partners/part4.webp">
        </div>
        <div class="ui partner">
            <img class="ui small image" src="/media/img/partners/IMG_7491 1.webp" style="max-width: 85px;">
        </div>
        <div class="ui partner">
            <img class="ui small image" src="/media/img/partners/bank5.webp">
        </div>
        <div class="ui partner">
            <img class="ui small image" src="/media/img/partners/astana-motors-p_grafiches_cd4.webp">
        </div>
        <div class="ui partner">
            <img class="ui small image" src="/media/img/partners/d9f374c13eb766295f44a21cd802f969.webp">
        </div>
        <div class="ui partner">
            <img class="ui small image" src="/media/img/partners/og.webp">
        </div>
        <div class="ui partner">
            <img class="ui small image" src="/media/img/partners/chayhona1.webp">
        </div>
        <div class="ui partner">
            <img class="ui small image" src="/media/img/partners/part2.webp">
        </div>
        <div class="ui partner">
            <img class="ui small image" src="/media/img/partners/log.webp">
        </div>
        <div class="ui partner">
            <img class="ui small image" src="/media/img/partners/20191214_the_lancet_should_doctors_have_a_legal_duty_to_warn_relatives.webp">
        </div>
    </div>
</div>

<div class="ui container fluid section wow fadeIn">
    <div class="ui section-title" style="font-size: 20px;">
        <div class="ui huge header center aligned" id="benefits">
            <?= Yii::t('app', 'Advantages'); ?>
        </div>
    </div>

    <div class="ui container advantages wow fadeIn">
        <div class="advantage">
            <div class="ui two middle aligned column stackable grid">
                <div class="three wide column text-center">
                    <svg width="100%" height="162" viewBox="0 0 167 162" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_301_373)">
                            <path d="M95.4823 56.6158V44.9949C95.4823 38.9197 90.5574 33.9949 84.4823 33.9949H26C21.0294 33.9949 17 38.0243 17 42.9949V126.832C17 131.803 21.0294 135.832 26 135.832H84.4823C90.5574 135.832 95.4823 130.907 95.4823 124.832V74.7212" stroke="#C0A88C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M86.8506 36.0576C87.806 27.402 95.0175 13.5631 116.361 12.0423C139.041 10.4263 153.629 29.3941 161.605 51.7116C170.827 77.515 167.731 109.789 156.111 130.498C142.397 154.94 125.716 158.537 119.028 158.537C112.341 158.537 91.8237 156.468 87.0468 133.852" stroke="#C0A88C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M38.5332 135.917C41.0809 140.105 48.5997 147.761 57.1259 152.756C72.4277 161.72 118.438 168.257 137.372 152.259" stroke="#C0A88C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M94.3833 21.2554C102.026 24.8851 114.446 36.3327 119.223 59.7863C123.675 81.6452 123.113 102.297 117.313 120.096C111.512 137.894 101.758 145.463 94.3833 148.575" stroke="#C0A88C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M97.6904 18.1687C111.032 11.976 131.838 8.1906 147.889 36.335C168.529 72.5278 157.949 117.788 146.104 136.692C139.47 147.28 125.306 164.732 99.164 152.765" stroke="#C0A88C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M37.4062 33.9936C38.9759 31.2413 40.5164 25.7875 53.8875 18.1675C69.584 9.22242 115.104 1.42767 139.433 18.6299" stroke="#C0A88C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M17 47.1213C17 42.1508 21.0294 38.1213 26 38.1213H50.7474H76.4948C80.913 38.1213 84.4948 41.7031 84.4948 46.1213V123.702C84.4948 128.12 80.913 131.702 76.4948 131.702H26C21.0294 131.702 17 127.672 17 122.702V47.1213Z" stroke="#C0A88C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <ellipse cx="95.3436" cy="64.8124" rx="5.73231" ry="6.70104" stroke="#C0A88C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <ellipse cx="93.4346" cy="65.6505" rx="7.64308" ry="9.21393" stroke="#C0A88C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <ellipse cx="49.4861" cy="84.9173" rx="26.7508" ry="33.5052" stroke="#C0A88C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M35.1528 74.8646L46.6175 84.9162L65.7252 69.0012" stroke="#C0A88C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_301_373">
                                <rect width="167" height="162" fill="white"/>
                            </clipPath>
                        </defs>
                    </svg>
                </div>
                <div class="twelve wide right floated column">
						<span class="advantage_desc">
							<?= Yii::t('app', 'The accumulated experience based on long-term cooperation with companies engaged in various activities allows us to successfully perform a full cycle of work - from initial requirements analysis and technology consulting to long-term support of implemented solutions.') ?>
						</span>
                </div>
            </div>
        </div>

        <div class="advantage wow fadeIn">
            <div class="ui two middle aligned column stackable grid">
                <div class="three wide column text-center">
                    <svg width="100%" height="176" viewBox="0 0 166 176" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M96.0306 160L126.002 160C129.868 160 133.002 156.866 133.002 153L133.002 34C133.002 30.134 129.868 27 126.002 27L107.861 27" stroke="#C0A88C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M104.902 157.286L125.042 157.286C127.804 157.286 130.042 155.047 130.042 152.286L130.042 34.7146C130.042 31.9532 127.804 29.7146 125.042 29.7146L107.86 29.7146" stroke="#C0A88C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M107.86 29.7146H116.733V29.7146C116.733 32.7127 114.303 35.1432 111.304 35.1432H107.86V29.7146Z" stroke="#C0A88C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <rect x="107.859" y="8" width="152" height="79.858" rx="7" transform="rotate(90 107.859 8)" stroke="#C0A88C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <rect x="104.899" y="10.7146" width="146.571" height="73.9426" rx="5" transform="rotate(90 104.899 10.7146)" stroke="#C0A88C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M47.2256 10.7146H91.5911V10.7146C91.5911 14.4622 88.5531 17.5003 84.8054 17.5003H54.0113C50.2637 17.5003 47.2256 14.4622 47.2256 10.7146V10.7146Z" stroke="#C0A88C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="twelve wide right floated column">
						<span class="advantage_desc">
							<?= Yii::t('app', 'Protection of personal data, confidential information, as well as ensuring business continuity. Unique experience in the field of information security, the ability to solve non-standard and large-scale tasks.'); ?>
						</span>
                </div>
            </div>
        </div>

        <div class="advantage wow fadeIn">
            <div class="ui two middle aligned column stackable grid">
                <div class="three wide column text-center">
                    <svg width="100%" height="167" viewBox="0 0 167 167" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_301_366)">
                            <path d="M16.2941 40.7574C16.4205 39.1997 17.7215 38 19.2843 38H155.716C157.278 38 158.579 39.1997 158.706 40.7574L166.737 139.735C166.879 141.481 165.499 142.977 163.747 142.977H11.2533C9.50076 142.977 8.12137 141.481 8.26311 139.735L16.2941 40.7574Z" stroke="#C0A88C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M19.2331 43.2524C19.3035 42.2021 20.176 41.3862 21.2286 41.3862H153.774C154.826 41.3862 155.699 42.2021 155.769 43.2524L161.108 122.845C161.224 124.577 159.85 126.045 158.115 126.045H16.8876C15.1518 126.045 13.7782 124.577 13.8944 122.845L19.2331 43.2524Z" stroke="#C0A88C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M71.1752 157.754L72.5949 142.978H102.407L103.117 157.754C104.537 165.964 108.796 168.974 111.635 170.068H63.3672C68.4779 168.098 70.702 161.038 71.1752 157.754Z" stroke="#C0A88C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_301_366">
                                <rect width="167" height="167" fill="white"/>
                            </clipPath>
                        </defs>
                    </svg>
                </div>
                <div class="twelve wide right floated column">
						<span class="advantage_desc">
							<?= Yii::t('app', 'We always take into account the needs of our partners and are ready to work on new projects to expand business opportunities.') ?>
						</span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="ui container fluid section middle aligned wow fadeIn" id="future_step">
    <div class="ui container center aligned section-desc">
        <div class="ui" style="font-size: 20px;">
            <div class="ui huge header center aligned">
                <?= Yii::t('app', 'Step into the future'); ?>
            </div>
        </div>
        <?php
            $link = '<button class="ui inverted button huge">' . Yii::t('app', 'Leave a request') . '</button>';
            echo Html::a($link, ['#feedback']);
        ?>
    </div>
</div>

<div class="ui container fluid section wow fadeIn" id="clients_com">
    <div class="ui section-title" style="font-size: 20px;">
        <div class="ui huge header center aligned" id='ethics'>
            <?= Yii::t('app', 'Interaction with clients'); ?>
        </div>
    </div>

    <div class="ui center aligned">

        <div class="ui middle aligned centered stackable grid wow fadeInLeft">
            <div class="two wide column computer only"></div>
            <div class="four wide column text-center title">
                <div class="ui huge header">
                    <?= Yii::t('app', 'Analysis'); ?>
                </div>
                <p>
                    <?= Yii::t('app', 'We will consult and define your goals and objectives, determine the necessary basic functionality for a quick check of your business model.') ?>
                    <?= Yii::t('app', 'We will fix the desired functionality, send it to our analysts to compile a preliminary commercial offer for each of the stages of the creation / development of the project.'); ?>
                </p>
            </div>
            <div class="one wide column"></div>
            <div class="nine wide computer three wide mobile column text-center">
                <img src="/media/img/1.webp" class="ui image big">
            </div>
        </div>


        <div class="ui two middle aligned centered column stackable grid wow fadeInRight">
            <div class="nine wide computer three wide mobile column text-center">
                <img src="/media/img/2.webp" class="ui image big right floated">
            </div>
            <div class="one wide column"></div>
            <div class="four wide column text-center title">
                <div class="ui huge header">
                    <?= Yii::t('app', 'Designing'); ?>
                </div>
                <p>
                    <?= Yii::t('app', 'Based on our rich experience, we will propose best practices and solutions, reproduce the structure of the service and then jointly think through the main scenarios.'); ?>
                    <?= Yii::t('app', 'A preliminary commercial offer will allow you to take into account as many details as possible, thereby saving hours at further stages.'); ?>
                </p>
            </div>
            <div class="two wide column computer only"></div>
        </div>


        <div class="ui two middle aligned centered column stackable grid wow fadeInUp">
            <div class="two wide column computer only"></div>
            <div class="four wide column text-center title">
                <div class="ui huge header">
                    <?= Yii::t('app', 'Development'); ?>
                </div>
                <p>
                    <?= Yii::t('app', 'Together we will analyze the TOR, if changes are required, we will make adjustments to the documentation, give final estimates of the stages in terms of time and cost.'); ?>
                    <?= Yii::t('app', 'We will assemble a team from our employees responsible for product development, draw up and sign the necessary documents (contracts and annexes with estimates).'); ?>
                </p>
            </div>
            <div class="one wide column"></div>
            <div class="nine wide computer three wide mobile column text-center">
                <img src="/media/img/3.webp" class="ui image big">
            </div>
        </div>

        <div class="ui two middle aligned centered column stackable grid">
            <?= Html::a(Yii::t('app', 'Stages of development'), ['/steps'], ['class' => 'ui secondary basic brown massive button']) ?>
        </div>

    </div>
</div>