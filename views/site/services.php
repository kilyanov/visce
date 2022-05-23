<?php

use yii\helpers\Html;

$this->title = Yii::t('app', 'Vice - International IT company');

?>

<section class='darkened wow fadeIn'>
    <div class="container section" style="margin-top: 70px">
        <div class="ui section-title fs-5" >
            <div class="ui huge header center aligned">
                <?= Yii::t('app', 'Our services');?>
            </div>
        </div>
        <section class="halfed">
            <div class="row p-3">
                <div class="col-md align-self-center">
                    <img src="/media/img/services/automation.webp" class="p-2" alt="" style='width: inherit;'>
                </div>
                <div class="col-md p-3 text-center">
                    <div class="fs-4 text-center text-uppercase" id="automation">
                        <?= Yii::t('app', 'Automation of business processes');?>
                    </div>
                    <p align="justify" class="fs-5 mt-4">
                        <?= Yii::t('app', 'The main task of the business is to increase profits, and optimization of business processes at the enterprise is one of the ways to achieve this goal. The process approach, which is the basis of the Visce business process automation system, provides for optimization as an integral component of the company\'s development and a means of maintaining a leading position in a competitive environment.');?>

                    </p>
                    <button class="orderButton mt-4" data-bs-toggle="modal" data-bs-target="#exampleModal" data-nametitle="<?= Yii::t('app', 'Automation of business processes');?>">
                        <?= Yii::t('app', 'To order'); ?>
                    </button>
                </div>
            </div>
        </section>
    </div>
</section>

<section class="threePart mt-5 wow fadeIn">
    <div class="container">
        <div class="row fs-4 text-uppercase" align="center" style="color: #666666;">
            <div class="col-md p-3 pt-4 p-md-5">
                <?= Yii::t('app', 'They help to get up-to-date information and make timely management decisions based on it');?>
            </div>
            <div class="col-md p-3 pt-4 p-md-5 bordered">

                <div>
                    <?= Yii::t('app', 'They allow you to increase sales and profits by working with customers correctly');?>
                </div>

            </div>
            <div class="col-md p-3 pt-4 p-md-5">
                <?= Yii::t('app', 'They allow you to save staff from routine tasks and help reduce the influence of the human factor');?>
            </div>
        </div>
    </div>
</section>

<section class='darkened mt-5 wow fadeIn'>
    <div class="container section">
        <section class="halfed">
            <div class="row p-3">
                <div class="col-md align-self-center">
                    <img src="/media/img/services/crm.webp" class="p-2" alt="" style='width: inherit;'>
                </div>
                <div class="col-md p-3 text-center">
                    <div class="fs-4 text-center text-uppercase" id="crm"><?= Yii::t('app', 'Development and implementation of CRM/ERP/HRM systems'); ?></div>
                    <p align="justify" class="fs-5 mt-4">
                        <?= Yii::t('app', 'CRM is a customer relationship automation program that allows you to successfully control, plan and develop any customer–oriented business.'); ?>
                    </p>
                    <p align="justify" class="fs-5 mt-4">
                        <?= Yii::t('app', 'ERP is a system aimed at managing the company\'s resources. The program allows you to exchange information and distribute tasks between departments.'); ?>
                    </p>
                    <p align="justify" class="fs-5 mt-4">
                        <?= Yii::t('app', 'HRM is a program for personnel management. It allows you to track personnel decisions, evaluate the effectiveness of staff work and see motivation.'); ?>
                    </p>
                    <button class="orderButton mt-4" data-bs-toggle="modal" data-bs-target="#exampleModal" data-nametitle="<?= Yii::t('app', 'Development and implementation of CRM/ERP/HRM systems'); ?>">
                        <?= Yii::t('app', 'To order'); ?>
                    </button>
                </div>
            </div>
        </section>
    </div>
</section>

<section class="grided mt-5 mb-5 wow fadeIn">
    <div class="container text-uppercase fs-4">
        <div class="wrapper">
            <div class="d-flex align-items-center imgGrid">
                <div class="text-center p-2"><?= Yii::t('app', 'Reducing the influence of the human factor'); ?></div>
                <img src="/media/img/services/crm2.webp" style="width: 50%; height: 100%; object-fit: cover;">
            </div>

            <div class="d-flex orderBox align-items-center">
                <div class="included">
                    <div class="text-center"><?= Yii::t('app', 'Reduction of production costs'); ?></div>
                    <button class="orderButton" data-bs-toggle="modal" data-bs-target="#exampleModal" data-nametitle="<?= Yii::t('app', 'Development and implementation of CRM/ERP/HRM systems'); ?>">
                        <?= Yii::t('app', 'To order'); ?>
                    </button>
                </div>

            </div>

            <div class="d-flex align-items-center justify-content-center p-5">
                <div class="text-center">
                    <?= Yii::t('app', 'Improving the company\'s manageability indicators'); ?>
                </div>
            </div>

        </div>
    </div>
</section>

<section class='darkened mt-5 wow fadeIn'>
    <div class="container section">
        <section class="halfed">
            <div class="row p-3">
                <div class="col-md align-self-center">
                    <img src="/media/img/services/database.webp" class="p-2" alt="" style='width: inherit;'>
                </div>
                <div class="col-md p-3 text-center">
                    <div class="fs-4 text-center text-uppercase" id="databases"><?= Yii::t('app', 'Database development'); ?></div>
                    <p align="justify" class="fs-5 mt-4">
                        <?= Yii::t('app', 'Any software product works with information that can be in one form or another and is recorded in the data. Currently, it is generally accepted to present such information in the form of a set of independent systematized materials — a database. This allows you to store a large amount of information and quickly search for the right materials.'); ?>
                    </p>
                    <button class="orderButton mt-4" data-bs-toggle="modal" data-bs-target="#exampleModal" data-nametitle="<?= Yii::t('app', 'Database development'); ?>">
                        <?= Yii::t('app', 'To order'); ?>
                    </button>
                </div>
            </div>
        </section>
    </div>
</section>

<section class="threePart mt-5 wow fadeIn">
    <div class="container">
        <div class="row fs-4 text-uppercase" align="center" style="color: #666666;">
            <div class="col-md p-3 pt-4 p-md-5">
                <?= Yii::t('app', 'a single information space for all employees of the company'); ?>
            </div>
            <div class="col-md p-3 pt-4 p-md-5 bordered">
                <div>
                    <?= Yii::t('app', 'a clear picture of the cases without spending time on preparing reports'); ?>
                </div>
            </div>
            <div class="col-md p-3 pt-4 p-md-5">
                <?= Yii::t('app', 'databases are better protected from information loss'); ?>
            </div>
        </div>
    </div>
</section>

<section class='darkened mt-5 wow fadeIn'>
    <div class="container section">
        <section class="halfed">
            <div class="row p-3">
                <div class="col-md align-self-center">
                    <img src="/media/img/services/cloud.webp" class="p-2" alt="" style="width: inherit;">
                </div>
                <div class="col-md p-3 text-center">
                    <div class="fs-4 text-center text-uppercase" id="cloud"><?= Yii::t('app', 'Cloud solutions')?></div>
                    <p align="justify" class="fs-5 mt-4">
                        <?= Yii::t('app', 'Cloud software development is an excellent solution for a company that needs an application or program with advanced user settings, good scalability and easy integration with the server.'); ?>
                        <?= Yii::t('app', 'You can store data and programs in cloud storage, working with them online and without loading your computer\'s hard drives.'); ?>
                    </p>
                    <button class="orderButton mt-4" data-bs-toggle="modal" data-bs-target="#exampleModal" data-nametitle="<?= Yii::t('app', 'Cloud solutions'); ?>">
                        <?= Yii::t('app', 'To order'); ?>
                    </button>
                </div>
            </div>
        </section>
    </div>
</section>

<section class="grided grided_2 mt-5 mb-5 wow fadeIn">
    <div class="container text-uppercase fs-4">
        <div class="wrapper">

            <div class="d-flex align-items-center justify-self-center p-5">
                <div class="text-center">
                    <?= Yii::t('app', 'Work with text, tables and presentations together with colleagues'); ?>
                </div>
            </div>

            <div class="d-flex orderBox align-items-center">
                <div class="included">
                    <div class="text-center">
                        <?= Yii::t('app', 'allow and prohibit viewing and editing files to any user'); ?>
                        </div>
                    <button class="orderButton" data-bs-toggle="modal" data-bs-target="#exampleModal" data-nametitle="<?= Yii::t('app', 'Development and implementation of CRM/ERP/HRM systems'); ?>">
                        <?= Yii::t('app', 'To order'); ?>
                    </button>
                </div>
            </div>

            <div class="d-flex align-items-center imgGrid">
                <div class="text-center p-2">
                    <?= Yii::t('app', 'You can view documents, images and videos directly in the browser without downloading'); ?>
                </div>
                <img src="/media/img/services/cloud2.webp" style="width: 50%; height: 100%; object-fit: cover;">
            </div>

        </div>
    </div>
</section>

<section class='darkened mt-5 wow fadeIn'>
    <div class="container section">
        <section class="halfed">
            <div class="row p-3">
                <div class="col-md align-self-center">
                    <img src="/media/img/services/mobile.webp" class="p-2" alt="" style='width: inherit;'>
                </div>
                <div class="col-md p-3 text-center">
                    <div class="fs-4 text-center text-uppercase" id="mobile"><?= Yii::t('app', 'Mobile application development'); ?></div>
                    <p align="justify" class="fs-5 mt-4">
                        <?= Yii::t('app', 'We offer the creation of applications for iOS and Android in accordance with the technical task or vision of the customer. In consultation with our managers, it will become clear to you whether you need a mobile application and which one is specifically needed. By contacting us at an early stage, we will help you design a business model and a strategy for the phased development of the project. Analytics occupies an important place in our work: analysis of requirements and business processes, marketing and technical audit, requirements management at all stages of the project.'); ?>
                    </p>
                    <button class="orderButton mt-4" data-bs-toggle="modal" data-bs-target="#exampleModal" data-nametitle="<?= Yii::t('app', 'Mobile application development'); ?>">
                        <?= Yii::t('app', 'To order'); ?>
                    </button>
                </div>
            </div>
        </section>
    </div>
</section>

<section class="threePart mt-5 wow fadeIn">
    <div class="container">
        <div class="row fs-4 text-uppercase" align="center" style="color: #666666;">
            <div class="col-md p-3 pt-4 p-md-5">
                <?= Yii::t('app', 'Business automation'); ?>
            </div>
            <div class="col-md p-3 pt-4 p-md-5 bordered">
                <div>
                    <?= Yii::t('app', 'Increase in profits') ;?>
                </div>
            </div>
            <div class="col-md p-3 pt-4 p-md-5">
                <?= Yii::t('app', 'Company status') ;?>
            </div>
        </div>
    </div>
</section>

<section class='darkened mt-5 wow fadeIn'>
    <div class="container section">
        <section class="halfed">
            <div class="row p-3">
                <div class="col-md align-self-center">
                    <img src="/media/img/services/watch.webp" class="p-2" alt="" style="width: inherit;">
                </div>
                <div class="col-md p-3 text-center">
                    <div class="fs-4 text-center text-uppercase" id="smartWatch">
                        <?= Yii::t('app', 'Smart watches') ;?>
                    </div>
                    <p align="justify" class="fs-5 mt-4">
                        <?= Yii::t('app', 'Modern smart watches are not limited to measuring the owner\'s pulse and the number of steps he has taken. These devices can act as a "virtual trainer" and help users keep fit without even going to the gym. Based on the data on physical activity, the application can recommend an individual training program. Also, modern watches help not only to monitor health, but also to monitor daily tasks, help with things like paying for purchases with built-in NFC and much more. Our team is ready to create any application for iOS and Android devices in order to expand the functionality of the watch and simplify the life of the owner') ;?>
                    </p>
                    <button class="orderButton mt-4" data-bs-toggle="modal" data-bs-target="#exampleModal" data-nametitle="<?= Yii::t('app', 'Smart watches') ;?>">
                        <?= Yii::t('app', 'To order'); ?>
                    </button>
                </div>
            </div>
        </section>
    </div>
</section>

<section class="grided grided_3 mt-5 mb-5 wow fadeIn">
    <div class="container text-uppercase fs-4">
        <div class="wrapper">

            <div class="d-flex align-items-center justify-self-center p-5">
                <div class="text-center">
                    <?= Yii::t('app', 'Convenient receipt of notifications when syncing with your phone'); ?>
                </div>
            </div>

            <div class="d-flex orderBox align-items-center">
                <div class="included">
                    <div class="text-center"><?= Yii::t('app', 'Autonomous health monitoring'); ?></div>
                    <button class="orderButton" data-bs-toggle="modal" data-bs-target="#exampleModal" data-nametitle="<?= Yii::t('app', 'Smart watches') ;?>">
                        <?= Yii::t('app', 'To order'); ?>
                    </button>
                </div>
            </div>

            <div class="d-flex align-items-center imgGrid">
                <div class="text-center p-2">У<?= Yii::t('app', 'Control of the player, camera, voice recorder and other components'); ?></div>
                <img src="/media/img/services/watch2.webp" style="width: 50%; height: 100%; object-fit: cover;">
            </div>

        </div>
    </div>
</section>

<section class='darkened mt-5 wow fadeIn'>
    <div class="container section">
        <section class="halfed">
            <div class="row p-3">
                <div class="col-md align-self-center">
                    <img src="/media/img/services/api.webp" class="p-2" alt="" style="width: inherit;">
                </div>
                <div class="col-md p-3 text-center">
                    <div class="fs-4 text-center text-uppercase"><?= Yii::t('app', 'API Integration'); ?></div>
                    <p align="justify" class="fs-5 mt-4">
                        <?= Yii::t('app', 'Using the API (programming interface) of large services, they can be integrated with any web resource, which leads to a significant expansion of the functionality and capabilities of the site. All this is aimed at simplifying the interaction between the site and its target audience, increasing the efficiency of business processes. We also offer other solutions to increase the profitability of your resource. To do this, contact us using the contact phone numbers or the online form.');?>
                    </p>
                    <button class="orderButton mt-4" data-bs-toggle="modal" data-bs-target="#exampleModal" data-nametitle="<?= Yii::t('app', 'API Integration'); ?>">
                        <?= Yii::t('app', 'To order'); ?>
                    </button>
                </div>
            </div>
        </section>
    </div>
</section>

<section class="threePart mt-5 wow fadeIn">
    <div class="container">
        <div class="row fs-4 text-uppercase" align="center" style="color: #666666;">
            <div class="col-md p-3 pt-4 p-md-5">
                <?= Yii::t('app', 'Optimization of work with the client base');?>
            </div>
            <div class="col-md p-3 pt-4 p-md-5 bordered">
                <div>
                    <?= Yii::t('app', 'Creating and managing mailing lists');?>
                </div>
            </div>
            <div class="col-md p-3 pt-4 p-md-5">
                <?= Yii::t('app', 'Overall increase in the efficiency of the resource');?>
            </div>
        </div>
    </div>
</section>

<section class='darkened mt-5 wow fadeIn'>
    <div class="container section">
        <section class="halfed">
            <div class="row p-3">
                <div class="col-md align-self-center">
                    <img src="/media/img/services/ai.webp" class="p-2" alt="" style="width: inherit;">
                </div>
                <div class="col-md p-3 text-center">
                    <div class="fs-4 text-center text-uppercase" id="gatewaysAPI"><?= Yii::t('app', 'Gateway Development');?></div>
                    <p align="justify" class="fs-5 mt-4">
                        <?= Yii::t('app', 'The API gateway is located between clients and services. It performs the function of a reverse proxy, passing requests from clients to services. It can also perform specialized tasks such as authentication, completion of SSL requests, and frequency limiting. If this gateway is not deployed, clients will have to send requests directly to external services. However, there may be some problems when providing clients with direct access to services.'); ?>
                    </p>
                    <button class="orderButton mt-4" data-bs-toggle="modal" data-bs-target="#exampleModal" data-nametitle="<?= Yii::t('app', 'Gateway Development');?>">
                        <?= Yii::t('app', 'To order'); ?>
                    </button>
                </div>
            </div>
        </section>
    </div>

</section>

<section class="grided grided_4 mt-5 mb-5 wow fadeIn">
    <div class="container text-uppercase fs-4">
        <div class="wrapper">
            <div class="d-flex align-items-center imgGrid">
                <div class="text-center p-2"><?= Yii::t('app', 'You can view documents, images and videos directly in the browser without downloading');?></div>
                <img src="/media/img/services/ai2.webp" style="width: 50%; height: 100%; object-fit: cover;">
            </div>
            <div class="d-flex orderBox align-items-center">
                <div class="included">
                    <div class="text-center"><?= Yii::t('app', 'allow and prohibit viewing and editing files to any user'); ?></div>
                    <button class="orderButton" data-bs-toggle="modal" data-bs-target="#exampleModal" data-nametitle="<?= Yii::t('app', 'Gateway Development');?>">
                        <?= Yii::t('app', 'To order'); ?>
                    </button>
                </div>
            </div>

            <div class="d-flex align-items-center justify-self-center p-5">
                <div class="text-center">
                    <?= Yii::t('app', 'Work with text, tables and presentations together with colleagues'); ?>
                </div>
            </div>



        </div>
    </div>
</section>

<section class='darkened mt-5 wow fadeIn'>
    <div class="container section">
        <section class="halfed">
            <div class="row p-3">
                <div class="col-md align-self-center">
                    <img src="/media/img/services/aintel.webp" class="p-2" alt="" style="width: inherit;">
                </div>
                <div class="col-md p-3 text-center">
                    <div class="fs-4 text-center text-uppercase" id="artificialIntel"><?= Yii::t('app', 'Artificial intelligence'); ?></div>
                    <p align="justify" class="fs-5 mt-4">
                        <?= Yii::t('app', 'Artificial intelligence is scientific knowledge and technology for creating intelligent machines, programs, services, applications, etc. AI gives technology the ability to perform functions that are considered the prerogative of a person.'); ?>
                    </p>
                    <p align="justify" class="fs-5 mt-4">
                        <?= Yii::t('app', 'The creation of artificial intelligence is designed to optimize the company\'s activities, open previously inaccessible horizons, reduce costs, create a competitive advantage and allow people to engage in creative activities rather than routine.'); ?>
                    </p>
                    <button class="orderButton mt-4" data-bs-toggle="modal" data-bs-target="#exampleModal" data-nametitle="<?= Yii::t('app', 'Artificial intelligence'); ?>">
                        <?= Yii::t('app', 'To order'); ?>
                    </button>
                </div>
            </div>
        </section>
    </div>

</section>

<section class="threePart mt-5 wow fadeIn">
    <div class="container">
        <div class="row fs-4 text-uppercase" align="center" style="color: #666666;">
            <div class="col-md p-3 pt-4 p-md-5">
                <?= Yii::t('app', 'Forecasting the behavior of competitors and the general situation on the market.');?>
            </div>
            <div class="col-md p-3 pt-4 p-md-5 bordered">
                <div>
                    <?= Yii::t('app', 'Fast analytics of incoming data and instant response');?>
                </div>
            </div>
            <div class="col-md p-3 pt-4 p-md-5">
                <?= Yii::t('app', 'Creating algorithms to prevent financial losses');?>
            </div>
        </div>
    </div>
</section>

<section class='darkened mt-5 wow fadeIn'>
    <div class="container section">
        <section class="halfed">
            <div class="row p-3">
                <div class="col-md align-self-center">
                    <img src="/media/img/services/saas.webp" class="p-2" alt="" style="width: inherit;">
                </div>
                <div class="col-md p-3 text-center">
                    <div class="fs-4 text-center text-uppercase" id="saas"><?= Yii::t('app', 'Development of personalized Saas projects'); ?></div>
                    <p align="justify" class="fs-5 mt-4">
                        <?= Yii::t('app', 'The SaaS concept is a business model for using software, in which the customer is provided with a convenient WEB interface and full access to the application via the Internet. Thus, the newest business model of the relationship between the buyer and the software developer is presented. A distinctive feature of this type of software is the placement of the main "core" of the software part on the server of the software provider. Hence all the advantages of SaaS:'); ?>
                    </p>
                    <button class="orderButton mt-4" data-bs-toggle="modal" data-bs-target="#exampleModal" data-nametitle="<?= Yii::t('app', 'Development of personalized Saas projects'); ?>">
                        <?= Yii::t('app', 'To order'); ?>
                    </button>
                </div>
            </div>
        </section>
    </div>

</section>

<section class="grided mt-5 mb-5 wow fadeIn">
    <div class="container text-uppercase fs-4">
        <div class="wrapper">
            <div class="d-flex align-items-center imgGrid">
                <div class="text-center p-2"><?= Yii::t('app', 'Flexible design for any database.');?></div>
                <img src="/media/img/services/saas2.webp" style="width: 50%; height: 100%; object-fit: cover;">
            </div>

            <div class="d-flex orderBox align-items-center">
                <div class="included">
                    <div class="text-center"><?= Yii::t('app', 'It is a reliable solution for data storage.'); ?></div>
                    <button class="orderButton" data-bs-toggle="modal" data-bs-target="#exampleModal" data-nametitle="Р<?= Yii::t('app', 'Development of personalized Saas projects'); ?>">
                        <?= Yii::t('app', 'To order'); ?>
                    </button>
                </div>

            </div>

            <div class="d-flex align-items-center justify-content-center p-5">
                <div class="text-center">
                    <?= Yii::t('app', 'Easy work with files that are stored on the server of the service owner'); ?>
                </div>
            </div>

        </div>
    </div>
</section>

<section class='darkened mt-5 wow fadeIn'>
    <div class="container section">
        <section class="halfed">
            <div class="row p-3">
                <div class="col-md align-self-center">
                    <img src="/media/img/services/support.webp" class="p-2" alt="" style="width: inherit;">
                </div>
                <div class="col-md p-3 text-center">
                    <div class="fs-4 text-center text-uppercase" id="support"><?= Yii::t('app', 'Technical support'); ?></div>
                    <p align="justify" class="fs-5 mt-4">
                        <?= Yii::t('app', 'Vice offers technical support services designed for the integrated solution of support and maintenance tasks, as well as the development of business IT infrastructure. A wide range of service support services, customer system maintenance experience and Visce resources provide customers with guarantees of effective support'); ?>
                    </p>
                    <button class="orderButton mt-4" data-bs-toggle="modal" data-bs-target="#exampleModal" data-nametitle="<?= Yii::t('app', 'Technical support'); ?>">
                        <?= Yii::t('app', 'To order'); ?>
                    </button>
                </div>
            </div>
        </section>
    </div>

</section>

<section class="threePart mt-5 wow fadeIn">
    <div class="container">
        <div class="row fs-4 text-uppercase" align="center" style="color: #666666;">
            <div class="col-md p-3 pt-4 p-md-5">
                <?= Yii::t('app', 'The presence of its own contact center, which operates in 24x7 mode'); ?>
            </div>
            <div class="col-md p-3 pt-4 p-md-5 bordered">
                <div>
                    <?= Yii::t('app', 'Guarantees of a high level of maintenance of information systems in accordance with the SLA service agreement'); ?>
                </div>
            </div>
            <div class="col-md p-3 pt-4 p-md-5">
                <?= Yii::t('app', 'Minimizing business risks by reducing downtime and system failures'); ?>
            </div>
        </div>
    </div>
</section>

<section class='darkened mt-5 wow fadeIn'>
    <div class="container section">
        <section class="halfed">
            <div class="row p-3">
                <div class="col-md align-self-center">
                    <img src="/media/img/services/web.webp" class="p-2" alt="" style="width: inherit;">
                </div>
                <div class="col-md p-3 text-center">
                    <div class="fs-4 text-center text-uppercase" id="webDevelop"><?= Yii::t('app', 'Websites development'); ?></div>
                    <p align="justify" class="fs-5 mt-4">
                        <?= Yii::t('app', 'Each of our Internet projects is a cost–effective working resource that makes a profit and fully justifies the costs invested in it. The virtual representation of your company is developed individually depending on the goals and objectives of the business. Our specialists carefully think over user scenarios, interface and offer optimal technical and design solutions.'); ?>
                    </p>
                    <button class="orderButton mt-4" data-bs-toggle="modal" data-bs-target="#exampleModal" data-nametitle="Разработка сайтов">
                        <?= Yii::t('app', 'To order'); ?>
                    </button>
                </div>
            </div>
        </section>
    </div>

</section>

<section class="grided grided_3 mt-5 wow fadeIn">
    <div class="container text-uppercase fs-4">
        <div class="wrapper">

            <div class="d-flex align-items-center justify-self-center p-5">
                <div class="text-center">
                    <?= Yii::t('app', 'A website is a place where you can publish detailed information about a company'); ?>
                </div>
            </div>

            <div class="d-flex orderBox align-items-center">
                <div class="included">
                    <div class="text-center">
                        <?= Yii::t('app', 'this is a tool with which you can attract potential customers'); ?>
                    </div>
                    <button class="orderButton" data-bs-toggle="modal" data-bs-target="#exampleModal" data-nametitle="<?= Yii::t('app', 'Websites development'); ?>">
                        <?= Yii::t('app', 'To order'); ?>
                    </button>
                </div>
            </div>

            <div class="d-flex align-items-center imgGrid">
                <div class="text-center p-2"><?= Yii::t('app', 'The presence of a website indicates the technical advancement of the company and compliance with the requirements of the time'); ?></div>
                <img src="/media/img/services/web2.webp" style="width: 50%; height: 100%; object-fit: cover;">
            </div>

        </div>
    </div>
</section>

<section class="smartCollection pb-5 wow fadeIn" id='smartCollection' style="margin-top: 100px;">
    <div class="container" style="font-weight: 100;">
        <div class="text-center p-0 p-md-5 pt-5">
            <img src="/media/img/services/smartColLogo.svg" alt="" width="150">
            <div class="ui section-title fs-5 p-5" >
                <div class="ui huge header center aligned" style="color: white; font-weight: 100;">SMART COLLECTION</div>
            </div>
            <p class="text-center fs-5" style="font-weight: 100;">
                <?= Yii::t('app', 'Smart Collection is a special CRM system designed to solve the problem of technological support of the operational process of departments working with distressed assets. The system is designed to optimize the work of the company\'s divisions.'); ?>
            </p>
        </div>
        <div class="splide cover mb-5">
            <div class="splide__track">
                <ul class="splide__list text-center">
                    <li class="splide__slide "><img src="/media/img/services/smartCollection.webp" alt=""></li>
                    <li class="splide__slide"><img src="/media/img/services/smart2.webp" alt=""></li>
                </ul>
            </div>
        </div>
        <div class="row p-4">
            <div class="col-md-4 text-center"><img src="/media/img/services/ipad.webp" alt="" style="width: 40%;"></div>
            <div class="col-md-8 fs-4 text-center align-self-center">
               <?= Yii::t('app', 'The scalable software architecture makes it easy to expand the number of jobs and the number of concurrent users.');?>
            </div>
        </div>
        <div class="row p-4">
            <div class="col-md-4 text-center"><img src="/media/img/services/router.webp" alt="" style="width: 40%;"></div>
            <div class="col-md-8 fs-4 text-center align-self-center">
                <?= Yii::t('app', 'User access to the system is determined at the role level, while any active actions of operators in the system are recorded in the offline action log.'); ?>
            </div>
        </div>
        <div class="row p-4">
            <div class="col-md-4 text-center"><img src="/media/img/services/termostat.webp" alt="" style="width: 40%;"></div>
            <div class="col-md-8 fs-4 text-center align-self-center">
                <?= Yii::t('app', 'The built-in back-office allows you to form work flows and provides prioritization.'); ?>
            </div>
        </div>

        <div class="fs-4 text-center" style="margin-top: 7rem;"><?= Yii::t('app', 'Additional features of the system:')?> <br/>
            <?= Yii::t('app', 'Mobile application for the visiting group, with the ability to record video and photo reports, transfer online to the central platform "Smart Collection" Fixing the geolocation of collectors.'); ?>
       </div>

        <div class="fs-4 text-center mt-5">
            <a href="https://smart-collection.ru/">smart-collection.ru</a><br/>
            <a href="tel:+7(926)-881-87-10">+7(926)-881-87-10</a>
        </div>

    </div>
    <script>
        document.addEventListener( 'DOMContentLoaded', function() {
            var splide = new Splide( '.splide' );
            splide.mount();
        } );
    </script>
</section>