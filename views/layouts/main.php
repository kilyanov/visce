<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\models\OrderForm;use app\widgets\Alert;
use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <meta name="theme-color" content="#FBFBFB">
    <meta name="mailru-domain" content="TnyZb31uudy0yPN2" />
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link rel="apple-touch-icon" sizes="180x180" href="/media/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/media/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/media/favicon/favicon-16x16.png">
    <link rel="manifest" href="/media/favicon/site.webmanifest">
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<!-- SIDEBAR START -->
<div class="ui sidebar vertical menu borderless fs-2">
    <div class="p-3 text-end" id="closeSidebar">
        <?= Html::img('/media/cross.svg', ['alt' => '']);?>
    </div>
    <?= Html::a(Yii::t('app', 'About us'), ['/#aboutUs'], ['class' => 'item'])?>

    <div class="d-flex align-items-center">
        <?= Html::a(Yii::t('app', 'Services'), ['/services'], ['class' => 'item'])?>
        <label for="state" class="rotate">
            <i class="caret right icon "></i>
        </label>
    </div>

    <input type="checkbox" id="state" hidden>
    <div class="content">

        <?= Html::a(
                Yii::t('app', 'Automation of business processes'),
                ['/services#automation'],
                ['class' => 'item'])
        ?>
        <?= Html::a(
            Yii::t('app', 'CRM/ERP/HRM'),
            ['/services#crm'],
            ['class' => 'item'])
        ?>
        <?= Html::a(
            Yii::t('app', 'Databases'),
            ['/services#databases'],
            ['class' => 'item'])
        ?>
        <?= Html::a(
            Yii::t('app', 'Website development'),
            ['/services#webDevelop'],
            ['class' => 'item'])
        ?>
        <?= Html::a(
            Yii::t('app', 'Cloud solutions'),
            ['/services#cloud'],
            ['class' => 'item'])
        ?>
        <?= Html::a(
            Yii::t('app', 'Mobile Applications'),
            ['/services#mobile'],
            ['class' => 'item'])
        ?>
        <?= Html::a(
            Yii::t('app', 'Smart watches'),
            ['/services#smartWatch'],
            ['class' => 'item'])
        ?>
        <?= Html::a(
            Yii::t('app', 'API Gateways'),
            ['/services#gatewaysAPI'],
            ['class' => 'item'])
        ?>
        <?= Html::a(
            Yii::t('app', 'Artificial intelligence'),
            ['/services#artificialIntel'],
            ['class' => 'item'])
        ?>
        <?= Html::a(
            Yii::t('app', 'SAAS projects'),
            ['/services#saas'],
            ['class' => 'item'])
        ?>
        <?= Html::a(
            Yii::t('app', 'Technical support'),
            ['/services#support'],
            ['class' => 'item'])
        ?>
        <?= Html::a(
            Yii::t('app', 'Smart collection'),
            ['/services#smartCollection'],
            ['class' => 'item'])
        ?>
    </div>

    <?= Html::a(
        Yii::t('app', 'Customers'),
        ['/#running_line'],
        ['class' => 'item'])
    ?>
    <?= Html::a(
        Yii::t('app', 'Advantages'),
        ['/#benefits'],
        ['class' => 'item'])
    ?>
    <?= Html::a(
        Yii::t('app', 'Professional ethics'),
        ['/#ethics'],
        ['class' => 'item'])
    ?>
    <?= Html::a(
        Yii::t('app', 'Stages of development'),
        ['/steps'],
        ['class' => 'item'])
    ?>
    <?= Html::a(
        Yii::t('app', 'Leave a request'),
        ['/#feedback'],
        ['class' => 'item'])
    ?>
    <?= Html::a(
        Yii::t('app', 'Contacts'),
        ['/#contacts'],
        ['class' => 'item'])
    ?>
    <div href="#" class="text-center mt-5 sideBarLogo">
        <?= Html::a(
            Html::img('/media/Visce.svg'),
            ['/'],
            )
        ?>
    </div>
</div>
<!-- SIDEBAR END -->

<!-- HEADER START -->
<div class="pusher">
    <nav class="header_top p-1 p-md-2 text-center align-self-center">

        <a href="" id="up" class="logo">
            <?= Html::img('/media/Visce.svg', ['width' => '130',]);?>
        </a>

        <div class="openSideBarWrapper">
            <?= Html::img('/media/menu.svg', ['id' => 'openSideBar', 'class' => 'sidebar icon', 'alt' => '']);?>
        </div>


        <div class="contact p-2 d-flex align-items-center ">
            <div class="mobilePhoneContact d-block d-md-none">
                <a href="tel:+78002227766">
                    <i class="large phone icon"></i>
                </a>
            </div>

            <a href="tel:+7(926)-881-87-10">
                <div class="wrap fs-4 d-none d-md-block">
                    <div class="visib">
                        <?= Yii::t('app', 'Contacts'); ?>
                    </div>
                    <div class="invis">+7(926)-881-87-10</div>
                </div>
            </a>
            <?= Html::img('/media/sep.svg', ['class' => 'p-3 p-xl-4 pt-0 pb-0 pt-xl-0 pb-xl-0', 'alt' => '']);?>
            <div class="wrap align-middle">
                <?= Html::img('/media/earth.svg', ['class' => 'visib', 'alt' => '']);?>
                <?= Html::img('/media/darkEarth.svg', ['class' => 'invis', 'alt' => '']);?>
            </div>
        </div>
    </nav>

    <!-- HEADER END  -->

    <?= $content ?>

    <div class="ui container fluid section wow fadeIn" id="feedback">
        <div class="ui container">
            <div class="ui section-title" style="font-size: 20px;">
                <div class="ui huge header center aligned" id="feedback">
                    <?= Yii::t('app','Leave a request');?>
                </div>
            </div>

            <div class="ui container center aligned section-desc">
                <p>
                    <?= Yii::t('app', 'We will contact you the next business day and advise you on all issues.'); ?>
                </p>
            </div>

            <div class="ui form">
                <?php $form = ActiveForm::begin(['id' => 'order', 'class' => 'ui big form', 'action' => ['/order']]); ?>
                <?php $model = new OrderForm(); ?>
                    <div class="ui two column stackable grid">
                        <div class="eight wide column">
                            <div class="field">
                            <?= $form->field($model, 'name')
                                ->textInput(['placeholder' => Yii::t('app', 'Name')])
                                ->label(false);
                            ?>

                            </div>
                            <div class="field">
                                <?= $form->field($model, 'phone')
                                    ->textInput(['placeholder' => Yii::t('app', 'Phone')])
                                    ->label(false);
                                ?>
                            </div>
                            <div class="field">
                                <?= $form->field($model, 'email')
                                    ->textInput(['placeholder' => 'Email'])
                                    ->label(false);
                                ?>
                            </div>
                        </div>
                        <div class="eight wide column">
                            <div class="field">
                                <?= $form->field($model, 'body')
                                    ->textarea()
                                    ->label(false);
                                ?>
                                <div class="attachment">
                                    <div class="attachment_button">
                                        <svg width="25" height="25" viewBox="0 0 30 31" fill="#C4C4C4" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20.3614 8.97494L10.7245 17.9681C10.5618 18.1147 10.432 18.2901 10.3427 18.4841C10.2534 18.678 10.2064 18.8866 10.2044 19.0977C10.2025 19.3088 10.2456 19.5181 10.3313 19.7135C10.4169 19.9089 10.5434 20.0864 10.7034 20.2356C10.8634 20.3849 11.0536 20.503 11.263 20.5829C11.4724 20.6628 11.6968 20.703 11.923 20.7012C12.1492 20.6994 12.3728 20.6555 12.5807 20.5722C12.7886 20.4889 12.9766 20.3678 13.1338 20.2159L22.7723 11.2244C23.731 10.3299 24.2696 9.11677 24.2696 7.85179C24.2696 6.58681 23.731 5.37364 22.7723 4.47917C21.8137 3.58469 20.5134 3.08218 19.1577 3.08218C17.8019 3.08218 16.5016 3.58469 15.543 4.47917L5.90439 13.4723C5.0969 14.207 4.4538 15.0839 4.01238 16.0523C3.57097 17.0206 3.34003 18.0611 3.33296 19.1134C3.32589 20.1657 3.54284 21.2088 3.97122 22.1823C4.39959 23.1557 5.03087 24.0401 5.82843 24.7842C6.62598 25.5282 7.57395 26.1171 8.61733 26.5167C9.6607 26.9162 10.7787 27.1185 11.9065 27.1117C13.0344 27.105 14.1495 26.8894 15.1873 26.4774C16.2251 26.0654 17.1649 25.4652 17.9522 24.7117L27.5908 15.7202L30 17.9681L20.3614 26.9612C19.2539 27.9946 17.939 28.8143 16.4919 29.3736C15.0448 29.9329 13.4938 30.2207 11.9274 30.2207C10.3611 30.2207 8.81011 29.9329 7.36301 29.3736C5.9159 28.8143 4.60103 27.9946 3.49347 26.9612C2.3859 25.9278 1.50733 24.701 0.907922 23.3508C0.308512 22.0006 -1.16701e-08 20.5534 0 19.092C1.16701e-08 17.6306 0.308512 16.1834 0.907922 14.8332C1.50733 13.483 2.3859 12.2562 3.49347 11.2228L13.1338 2.23129C14.7405 0.783372 16.8925 -0.0178099 19.1261 0.00030048C21.3598 0.0184109 23.4966 0.854364 25.0761 2.32811C26.6556 3.80186 27.5516 5.79548 27.571 7.8796C27.5904 9.96371 26.7317 11.9716 25.1799 13.4707L15.543 22.467C15.0682 22.9099 14.5045 23.2612 13.8842 23.5009C13.2639 23.7405 12.5991 23.8638 11.9277 23.8638C11.2563 23.8637 10.5915 23.7402 9.97126 23.5004C9.351 23.2606 8.78745 22.9092 8.31276 22.4662C7.83807 22.0232 7.46155 21.4973 7.2047 20.9185C6.94784 20.3398 6.81568 19.7195 6.81576 19.093C6.81584 18.4666 6.94815 17.8463 7.20516 17.2676C7.46216 16.6889 7.83881 16.1631 8.31361 15.7202L17.9522 6.72705L20.3614 8.97494Z" />
                                        </svg>
                                        <?= $form->field($model, 'attachment[]')
                                            ->fileInput(['multiple' => true, 'class' => 'd-none current', 'accept' => 'application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint, text/plain, application/pdf, image/*'])
                                            ->label(false);
                                        ?>
                                    </div>
                                    <div class="attachment_files"></div>
                                </div>
                            </div>
                        </div>
                        <div class="eight wide column right floated">
                            <button class="ui secondary basic brown big button" type="submit"><?= Yii::t('app', 'Send'); ?></button>
                        </div>
                    </div>
                <?php ActiveForm::end(); ?>
            </div>

            <div class="ui container center aligned section-desc mt-5 agreement">
                <p>
                    <?= Yii::t('app', 'By submitting an application, you consent to the processing of your personal data.'); ?>
                </p>
            </div>
        </div>
    </div>
    <div class="ui container fluid section" id="social">
        <div class="ui section-title" style="font-size: 18px;">
            <div class="ui huge header center aligned" id='contacts'>
                <?= Yii::t('app', 'Join us'); ?>
            </div>
        </div>

        <div class="ui five column center aligned grid mt-5">
            <div class="column">
                <a href="https://www.instagram.com/visce.ru/" target="_blank">
                    <svg width="53" height="51" viewBox="0 0 53 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M26.5 0C33.7001 0 34.5984 0.0250265 37.4233 0.15016C40.2456 0.275293 42.1668 0.693237 43.8575 1.3139C45.6065 1.94957 47.0799 2.81049 48.5533 4.19947C49.9008 5.45054 50.9435 6.96388 51.6088 8.63418C52.2633 10.2284 52.7085 12.0453 52.841 14.7106C52.9656 17.3785 53 18.2269 53 25.0266C53 31.8263 52.9735 32.6747 52.841 35.3426C52.7085 38.0079 52.2633 39.8223 51.6088 41.419C50.9454 43.0903 49.9025 44.604 48.5533 45.8538C47.2282 47.1259 45.6259 48.1105 43.8575 48.7393C42.1694 49.3575 40.2456 49.7779 37.4233 49.9031C34.5984 50.0207 33.7001 50.0532 26.5 50.0532C19.3 50.0532 18.4016 50.0282 15.5767 49.9031C12.7544 49.7779 10.8332 49.3575 9.1425 48.7393C7.37316 48.1123 5.77045 47.1275 4.4467 45.8538C3.09893 44.6029 2.05622 43.0895 1.39125 41.419C0.73405 39.8248 0.2915 38.0079 0.159 35.3426C0.0344499 32.6747 0 31.8263 0 25.0266C0 18.2269 0.0264998 17.3785 0.159 14.7106C0.2915 12.0428 0.73405 10.2309 1.39125 8.63418C2.05438 6.96285 3.09733 5.4491 4.4467 4.19947C5.77083 2.92619 7.37344 1.94139 9.1425 1.3139C10.8332 0.693237 12.7518 0.275293 15.5767 0.15016C18.4016 0.0325345 19.3 0 26.5 0ZM26.5 12.5133C22.9859 12.5133 19.6157 13.8317 17.1308 16.1784C14.646 18.5251 13.25 21.7079 13.25 25.0266C13.25 28.3453 14.646 31.5282 17.1308 33.8749C19.6157 36.2216 22.9859 37.5399 26.5 37.5399C30.0141 37.5399 33.3843 36.2216 35.8692 33.8749C38.354 31.5282 39.75 28.3453 39.75 25.0266C39.75 21.7079 38.354 18.5251 35.8692 16.1784C33.3843 13.8317 30.0141 12.5133 26.5 12.5133ZM43.725 11.8876C43.725 11.058 43.376 10.2623 42.7548 9.67558C42.1336 9.08891 41.291 8.75931 40.4125 8.75931C39.534 8.75931 38.6914 9.08891 38.0702 9.67558C37.449 10.2623 37.1 11.058 37.1 11.8876C37.1 12.7173 37.449 13.513 38.0702 14.0997C38.6914 14.6864 39.534 15.016 40.4125 15.016C41.291 15.016 42.1336 14.6864 42.7548 14.0997C43.376 13.513 43.725 12.7173 43.725 11.8876ZM26.5 17.5186C28.6085 17.5186 30.6306 18.3096 32.1215 19.7177C33.6124 21.1257 34.45 23.0354 34.45 25.0266C34.45 27.0179 33.6124 28.9275 32.1215 30.3356C30.6306 31.7436 28.6085 32.5346 26.5 32.5346C24.3915 32.5346 22.3694 31.7436 20.8785 30.3356C19.3876 28.9275 18.55 27.0179 18.55 25.0266C18.55 23.0354 19.3876 21.1257 20.8785 19.7177C22.3694 18.3096 24.3915 17.5186 26.5 17.5186Z" fill="black"/>
                    </svg>
                </a>
            </div>
            <div class="column">
                <a href="https://t.me/viscegroup" target="_blank">
                    <svg width="53" height="53" viewBox="0 0 53 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M26.5 53C41.1355 53 53 41.1355 53 26.5C53 11.8645 41.1355 0 26.5 0C11.8645 0 0 11.8645 0 26.5C0 41.1355 11.8645 53 26.5 53Z" fill="url(#paint0_linear_301_306)"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.9954 26.2203C19.7207 22.8545 24.8721 20.6355 27.4496 19.5635C34.809 16.5025 36.3382 15.9707 37.3349 15.9532C37.5541 15.9493 38.0443 16.0037 38.3618 16.2613C38.6299 16.4788 38.7036 16.7727 38.7389 16.9789C38.7742 17.1852 38.8182 17.655 38.7832 18.0222C38.3844 22.2124 36.6588 32.3811 35.7809 37.0743C35.4094 39.0601 34.678 39.726 33.9699 39.7911C32.431 39.9328 31.2624 38.7741 29.7719 37.7971C27.4396 36.2682 26.1219 35.3165 23.858 33.8246C21.2416 32.1004 22.9377 31.1528 24.4288 29.6041C24.819 29.1988 31.5994 23.0315 31.7307 22.472C31.7471 22.402 31.7623 22.1412 31.6074 22.0035C31.4524 21.8658 31.2237 21.9129 31.0587 21.9503C30.8248 22.0034 27.0988 24.4661 19.8808 29.3385C18.8232 30.0647 17.8653 30.4185 17.007 30.4C16.0608 30.3795 14.2407 29.865 12.8877 29.4252C11.2281 28.8857 9.90914 28.6005 10.024 27.6843C10.0838 27.2071 10.741 26.7191 11.9954 26.2203Z" fill="white"/>
                        <defs>
                            <linearGradient id="paint0_linear_301_306" x1="26.5" y1="0" x2="26.5" y2="52.6069" gradientUnits="userSpaceOnUse">
                                <stop/>
                                <stop offset="1"/>
                            </linearGradient>
                        </defs>
                    </svg>
                </a>
            </div>
            <div class="column">
                <a href="https://www.linkedin.com/company/80683341" target="_blank">
                    <svg width="53" height="53" viewBox="0 0 53 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 8C2 4.13401 5.13401 1 9 1H45C48.866 1 52 4.13401 52 8V44C52 47.866 48.866 51 45 51H9C5.13401 51 2 47.866 2 44V8Z" fill="black"/>
                        <path d="M20 14.5C20 16.9853 17.9853 19 15.5 19C13.0147 19 11 16.9853 11 14.5C11 12.0147 13.0147 10 15.5 10C17.9853 10 20 12.0147 20 14.5Z" fill="white"/>
                        <path d="M12 22C12 21.4477 12.4477 21 13 21H18C18.5523 21 19 21.4477 19 22V41C19 41.5523 18.5523 42 18 42H13C12.4477 42 12 41.5523 12 41V22Z" fill="white"/>
                        <path d="M23 21L27.5 21C28.0523 21 28.5 21.4477 28.5 22V23C30.5 20.5 34.1667 20.3333 36 20.5C41.7154 21.0195 42.6667 26.8333 42.5 30L42.5 41C42.5 41.5523 42.0523 42 41.5 42L37 42C36.4477 42 36 41.5523 36 41V30C35.8333 28.6667 34.9 26 32.5 26C30.1 26 28.6667 29 28.5 30V41C28.5 41.5523 28.0523 42 27.5 42L23 42C22.4477 42 22 41.5523 22 41V22C22 21.4477 22.4477 21 23 21Z" fill="white"/>
                    </svg>
                </a>
            </div>
            <div class="column">
                <a href="https://www.facebook.com/profile.php?id=100077904720696" target="_blank">
                    <svg width="53" height="53" viewBox="0 0 53 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M50 25C50 38.8071 38.8071 50 25 50C11.1929 50 0 38.8071 0 25C0 11.1929 11.1929 0 25 0C38.8071 0 50 11.1929 50 25Z" fill="url(#paint0_linear_301_313)"/>
                        <path d="M50 25C50 38.8071 38.8071 50 25 50C11.1929 50 0 38.8071 0 25C0 11.1929 11.1929 0 25 0C38.8071 0 50 11.1929 50 25Z" fill="url(#paint1_linear_301_313)"/>
                        <path d="M21 32.5V49.5C21 49.7761 21.2239 50 21.5 50H28.5C28.7761 50 29 49.7761 29 49.5V32.5C29 32.2239 29.2239 32 29.5 32H34.5C34.7761 32 35 31.7761 35 31.5V25.5C35 25.2239 34.7761 25 34.5 25H29.5C29.2239 25 29 24.7765 29 24.5003V20C29 18 31.5 17 32.5 17H35.5C35.7761 17 36 16.7761 36 16.5V10.5C36 10.2239 35.7762 10 35.5001 10H29C24.2 10 21 15 21 18V24.5C21 24.7761 20.7761 25 20.5 25H15.5C15.2239 25 15 25.2239 15 25.5V31.5C15 31.7761 15.2239 32 15.5 32H20.5C20.7761 32 21 32.2239 21 32.5Z" fill="white"/>
                        <defs>
                            <linearGradient id="paint0_linear_301_313" x1="25" y1="0" x2="25" y2="50" gradientUnits="userSpaceOnUse">
                                <stop/>
                                <stop offset="1"/>
                            </linearGradient>
                            <linearGradient id="paint1_linear_301_313" x1="25" y1="0" x2="25" y2="50" gradientUnits="userSpaceOnUse">
                                <stop/>
                                <stop offset="1"/>
                            </linearGradient>
                        </defs>
                    </svg>
                </a>
            </div>
            <div class="column">
                <a href="https://vc.ru/u/1070182-visce" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="53px" height="53px" viewBox="0 0 53 49" version="1.1">
                        <g id="surface1">
                            <path style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;" d="M 3.203125 0.320312 C 2.042969 0.734375 1.121094 1.546875 0.582031 2.65625 L 0.203125 3.402344 L 0.203125 45.570312 L 0.527344 46.171875 C 1.027344 47.105469 1.445312 47.585938 2.148438 48.027344 C 3.515625 48.894531 2.121094 48.851562 26.851562 48.8125 L 49.28125 48.773438 L 50.027344 48.425781 C 51.148438 47.890625 51.90625 47.171875 52.378906 46.171875 L 52.796875 45.304688 L 52.796875 3.804688 L 52.472656 2.960938 C 52.082031 1.933594 51.148438 0.921875 50.203125 0.492188 L 49.550781 0.199219 L 26.636719 0.171875 C 7.597656 0.148438 3.636719 0.171875 3.203125 0.320312 Z M 40.765625 4.589844 C 42.25 5.003906 43.359375 5.523438 44.386719 6.3125 L 44.886719 6.699219 L 44.886719 11.074219 L 41.914062 11.074219 L 41.914062 8.035156 L 41.304688 7.738281 C 39.980469 7.113281 38.074219 6.886719 36.652344 7.21875 C 34.976562 7.59375 33.464844 8.832031 32.609375 10.515625 L 32.109375 11.53125 L 32.109375 13.476562 C 32.109375 15.398438 32.109375 15.425781 32.558594 16.308594 C 33.394531 18 34.71875 19.09375 36.4375 19.550781 C 38.546875 20.082031 40.667969 19.535156 42.347656 18.027344 L 43.089844 17.359375 L 44.15625 18.160156 C 44.738281 18.601562 45.238281 19.042969 45.265625 19.136719 C 45.320312 19.363281 43.480469 21.070312 42.683594 21.523438 C 41.398438 22.273438 40.238281 22.578125 38.425781 22.644531 C 36.449219 22.726562 35.558594 22.550781 33.867188 21.738281 C 31.515625 20.617188 29.839844 18.65625 29 16.078125 C 28.71875 15.1875 28.664062 14.757812 28.664062 13.464844 C 28.664062 11.691406 28.972656 10.476562 29.839844 8.96875 C 30.71875 7.394531 32.585938 5.738281 34.289062 4.992188 C 35.585938 4.445312 36.640625 4.269531 38.398438 4.335938 C 39.332031 4.375 40.398438 4.484375 40.765625 4.589844 Z M 13.722656 5.296875 C 13.941406 5.910156 16.75 14 17.605469 16.441406 C 17.820312 17.09375 18.050781 17.613281 18.105469 17.613281 C 18.15625 17.613281 18.347656 17.148438 18.550781 16.574219 C 18.738281 16.011719 19.578125 13.597656 20.402344 11.210938 C 21.242188 8.820312 22.078125 6.390625 22.296875 5.804688 L 22.660156 4.738281 L 25.257812 4.695312 L 27.851562 4.671875 L 27.851562 7.605469 L 25.011719 7.605469 L 24.863281 7.964844 C 24.78125 8.179688 23.511719 11.515625 22.039062 15.414062 L 19.347656 22.484375 L 17.941406 22.523438 L 16.535156 22.566406 L 16.386719 22.191406 C 16.171875 21.671875 14.667969 17.546875 14.128906 16.011719 C 13.640625 14.625 11.304688 8.21875 11.15625 7.832031 C 11.074219 7.632812 10.855469 7.605469 9.519531 7.605469 L 7.976562 7.605469 L 7.976562 4.671875 L 13.492188 4.671875 Z M 14.886719 27.648438 C 14.898438 28.410156 14.941406 29.171875 14.992188 29.355469 C 15.089844 29.675781 15.101562 29.675781 15.507812 29.089844 C 16.359375 27.890625 17.605469 26.996094 19.050781 26.554688 C 19.710938 26.339844 20.292969 26.289062 21.644531 26.289062 L 23.390625 26.289062 L 23.390625 31.625 L 20.414062 31.625 L 20.414062 28.917969 L 19.792969 29.011719 C 18.726562 29.144531 17.628906 29.730469 16.886719 30.53125 C 15.425781 32.121094 15.277344 32.71875 15.277344 37.390625 L 15.277344 41.101562 L 22.984375 41.101562 L 22.984375 43.769531 L 9.328125 43.769531 L 9.328125 40.964844 L 12.167969 40.964844 L 12.167969 28.957031 L 9.328125 28.957031 L 9.328125 26.289062 L 14.871094 26.289062 Z M 32.609375 32.320312 C 32.664062 37.816406 32.691406 38.429688 32.921875 39.164062 C 33.246094 40.152344 34.152344 41.140625 34.949219 41.355469 C 36.152344 41.675781 37.9375 41.40625 38.480469 40.820312 C 38.601562 40.6875 38.789062 40.566406 38.871094 40.566406 C 39.113281 40.566406 39.953125 39.605469 40.304688 38.9375 C 40.898438 37.789062 40.96875 37.242188 40.96875 33.121094 L 40.96875 29.222656 L 37.855469 29.222656 L 37.855469 26.289062 L 44.078125 26.289062 L 44.078125 31 C 44.078125 33.601562 44.117188 36.898438 44.171875 38.339844 L 44.253906 40.964844 L 46.511719 40.964844 L 46.511719 43.769531 L 41.683594 43.769531 L 41.589844 42.929688 C 41.441406 41.566406 41.34375 41.101562 41.222656 41.101562 C 41.167969 41.101562 41.074219 41.21875 41.035156 41.367188 C 40.898438 41.792969 39.535156 43.183594 38.859375 43.570312 C 37.953125 44.089844 37.101562 44.304688 35.828125 44.304688 C 33.273438 44.304688 31.355469 43.195312 30.285156 41.101562 C 29.515625 39.59375 29.472656 39.230469 29.472656 34 L 29.472656 29.222656 L 26.769531 29.222656 L 26.769531 26.289062 L 32.570312 26.289062 Z M 6.085938 42.433594 L 6.085938 43.902344 L 3.109375 43.902344 L 3.109375 40.964844 L 6.085938 40.964844 Z M 6.085938 42.433594 "/>
                        </g>
                    </svg>
                </a>
            </div>
        </div>
    </div>
    <footer>
        <div class="footer container">

            <div class="row">
                <div class="col">
                    <?= Html::a(Yii::t('app','About the company'), ['/#aboutUs']);?>
                    <?= Html::a(Yii::t('app','Services'), ['/services']);?>
                    <?= Html::a(Yii::t('app','Customers'), ['/#running_line']);?>
                </div>
                <div class="col">
                    <?= Html::a(Yii::t('app','Development'), '');?>
                    <?= Html::a(Yii::t('app','Smart collection'), ['/services#smartCollection']);?>
                    <?= Html::a(Yii::t('app','Contacts'), ['/#contacts']);?>
                </div>
                <div class="col">
                    <?= Html::a(Yii::t('app','Work'), '');?>
                    <?= Html::a(Yii::t('app','Cookies'), ['/cookie']);?>
                    <?= Html::a(Yii::t('app','Privacy Policy'), ['/privacy']);?>
                </div>

            </div>
        </div>


        <div class="container">
            <div class="footerLogo text-end p-3">
                <img src="./assets/media/VisceLight.svg" alt="" width="130">
            </div>
            <div class="pb-2 row fs-6 contactFooter" style="position: relative;">
                <div class="col p-0 pl-md-2 pb-0 d-md-flex align-items-end" style="margin-left: 148;">
                    <div class="text-center p-1 p-md-2 pl-0">
                        Moscow <br class="mobile-break"/>Grodninskaya 6/1
                    </div>
                    <a href="tel:+7(926)-881-87-10" class="p-1 p-md-2 text-center d-block">+7(926)-881-87-10</a>
                </div>
                <div class="col text-center align-self-end p-1 p-md-2">
                    <a href="mailto:info@visce.ru">info@visce.ru</a><br/>
                    <?= date('Y') ?> Visce
                </div>
                <div class="col align-self-end">

                </div>
            </div>
        </div>
    </footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
