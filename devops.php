<?php $activePage = 'solutions'; include "header.php" ?>
<!-- Aws Page -->
<section id="career-banner">
    <div class="container-fluid">
        <div class="row">
            <div class="text-center">
                <div class="career-container career-b-clr">
                    <img src="img/devopsx.jpg" alt="banner-img" class="career-img img-fluid"/>
                        <div class="overlay-career">
                        <div class="career-text mt-4">
                            <h2>DevOps</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="dw-ctnt" class="my-5">
    <div class="container text-justify">
        <div class="row mb-1">
            <div class="col-md-8 col-xs-12 mt-2">
                <h2 class="mb-4">DevOps</h2>
                <p>DevOps is the blending of the terms development and operations, meant to represent a 
                collaborative or shared approach to the tasks performed by a company's application development 
                and IT operations teams.
                </p>
            </div>
            <div class="col-md-4 col-xs-12  ">
                <img src="img/devops.png" alt="" class="img-fluid">
            </div>

            <div class="col-md-12 col-xs-12 mt-2">
                <p style="font-weight:500;">Tools used in DevOps</p>
                 <ul class="fa-ul">
                    <li><i class="fa-li fa fa-cog fa-lg"></i> Docker is a computer program that performs operating-system-level virtualization</li>
                    <li><i class="fa-li fa fa-cog fa-lg"></i> Kubernetes is an open-source container-orchestration system for automating deployment, scaling and management of containerized applications.</li>
                </ul>
                <p style="font-weight:500;">Configuration Management</p>
                <ul class="fa-ul">
                    <li><i class="fa-li fa fa-cog fa-lg"></i> The Chef server stores cookbooks, the policies that are applied to nodes, and metadata that describes each registered node that is being managed by the chef-client.</li>
                    <li><i class="fa-li fa fa-cog fa-lg"></i> Puppet is an open-source software configuration management tool.</li>
                    <li><i class="fa-li fa fa-cog fa-lg"></i> Ansible is open source software that automates software provisioning, configuration management, and application deployment.</li>
                    <li><i class="fa-li fa fa-cog fa-lg"></i> Salt is a Python-based open-source configuration management software and remote execution engine.</li>
                </ul>
                <p style="font-weight:500;">Continuous Integration/Continuous Deployment</p>
                <ul class="fa-ul">
                    <li><i class="fa-li fa fa-cog fa-lg"></i> Jenkins is an open source automation server written in Java. Jenkins helps to automate the non-human part of the software development process</li>
                    <li><i class="fa-li fa fa-cog fa-lg"></i> Artifactory is a product by JFrog that serves as a binary repository manager.</li>
                </ul>
            </div>

            <div class="col-md-12 col-xs-12 mt-1 mb-3">
                <h5>Google Cloud Platform</h5>
                <p class="mt-1">
                    Google Cloud Platform, offered by Google, is a suite of cloud computing services that runs on 
                    the same infrastructure that Google uses internally for its end-user products, such as Google
                    Search and YouTube.
                </p>
                <ul class="fa-ul">
                    <li><i class="fa-li fa fa-cog fa-lg"></i> Google Kubernetes Engine (GKE) is a management and orchestration system for Docker container  and container clusters that run within Google's public cloud services. Google Kubernetes Engine is based on Kubernetes, Google's open source container management system.   </li>
                </ul>
            </div>
        </div>
    </div>
</section>


<?php include "footer.php" ?>