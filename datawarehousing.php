<!-- Incude Header File -->
<?php $activePage = 'solutions'; include "header.php"; ?>
<!-- Aws Page -->
<section id="aws-banner">
    <div class="container-fluid">
        <div class="row">
            <div class="text-center">
                <div class="aws-container aws-b-clr">
                    <img src="img/dwh.jpg" alt="banner-img" class="aws-img img-fluid">
                    <!-- <div class="overlay-aws">
                        <div class="aws-text mt-4">
                            <h2>Data Warehouse</h2>
                        </div>
                    </div>    -->
                </div>
            </div>
        </div>
    </div>
</section>


<section id="dw-ctnt" class="my-5 text-justify">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-2">
                <h2 class="">DATA WAREHOUSING</h2>
                <p class="mt-3">
                    A Data Warehouse process ensures access to and a periodic and automatic transfer
                    of data from a number of operative or even external sources. The first ETL process
                    (Extraction, Transformation, Loading) must ensure data quality. It will not only 
                    perform possibility checks on data arriving from very diverse sources
                    but also provides data with structural information allowing a combination of data from different
                    sources.
                </p>
            </div>
            <br>
            <div class="col-md-8 mt-4">
                <h5>Real-Time Processing</h5>
                <ul class="fa-ul mt-3   ">
                    <li><i class="fa-li fa fa-cog fa-lg"></i> Real-Time processing helps to compute a function of one data element. Also, can say it computes a smallest window of recent data.</li>
                    <li><i class="fa-li fa fa-cog fa-lg"></i> Real-Time processing computes something relatively simple</li>
                    <li><i class="fa-li fa fa-cog fa-lg"></i> While we need to compute in near-real-time, only seconds at most, we go for real-time processing.</li>
                    <li><i class="fa-li fa fa-cog fa-lg"></i> In real-time processing, computations are generally independent.</li>
                    <li><i class="fa-li fa fa-cog fa-lg"></i> They are asynchronous in nature. It means a source of data doesn’t interact with the stream processing directly.</li>
                </ul>
            </div>
            <div class="col-md-4 mt-4 text-center">
                <img src="img/rp.png" class="img-fluid" alt="img">
             </div>
            <br>
            <hr>
            <div class="col-md-8 mt-4">
                <h5>Batch Processing</h5>
                <p class="mt-3">
                We follow the efficient way of processing high/large volumes of data is what you 
                call Batch Processing. It is processed, especially where a group of transactions 
                is collected over a period of time. In this process, At first, data is collected,
                en  tered and processed. Afterward, it produces batch results. 
                </p>
                <ul class="fa-ul mt-3">
                    <li><i class="fa-li fa fa-cog fa-lg"></i> Batch processing access to all data.</li>
                    <li><i class="fa-li fa fa-cog fa-lg"></i> It might compute something big and complex.</li>
                    <li><i class="fa-li fa fa-cog fa-lg"></i> Generally, it is very concerned with throughput. Rather than the latency of individual components of the computation.</li>
                    <li><i class="fa-li fa fa-cog fa-lg"></i>Batch processing has latency measured in minutes or more.</li>
                </ul>
            </div>
             <div class="col-md-4 mt-4 text-center">
                <img src="img/bp.png" class="img-fluid" alt="img">
             </div>
             <br>
             <hr>
             <div class="col-md-12 mt-5">
                <h5 class="">Cloud Strategy</h5>
                <p class="mt-3 mb-3">
                    Data warehouses in the cloud are built differently.
                    Each warehouse provider offers its own unique structure,
                    distributing workloads and processing data across several
                    physical servers, networks, or software
                    tools while making data easily accessible and more powerful. 
                </p>
                <br>
            </div>
            <div class="col-md-12 mt-2">
                <h5>On-Premises Strategy</h5>
                <p class="mb-3">
                    On-Premise data warehouses sit on top of a three-tier, nine-layer architecture.
                    The tiers provide the general structure for how data is collected, stored,
                    and used. At the bottom tier, a database server collects data from multiple 
                    sources such as financial, sales and marketing, customer, and inventory systems
                    — while an OLAP (online analytical processing) server in the middle tier makes the
                    data usable for analysis. In the top tier, 
                    users can then query, access, and manipulate the data through a variety of tools.
                </p>
                <ul class="fa-ul mt-3">
                    <li><i class="fa-li fa fa-cog fa-lg"></i> Data enters the database (data source) where it’s then extracted and cleaned (data extraction).</li>
                    <li><i class="fa-li fa fa-cog fa-lg"></i> A staging area further cleans the data and holds it before it’s funneled into the data warehouse.</li>
                    <li><i class="fa-li fa fa-cog fa-lg"></i> An ETL process (extraction, transformation, load) changes the data from its original state into a form in which it can be analyzed, often through a third-party ETL tool.</li>
                    <li><i class="fa-li fa fa-cog fa-lg"></i> Then the data is loaded, or stored, in the actual data warehouse (data storage).</li>
                    <li><i class="fa-li fa fa-cog fa-lg"></i> Data logic is applied, which sets rules for how the data will be reported on, and data presentation makes the data presentable for users in tables, graphs, emails, alerts, and other forms.</li>
                    <li><i class="fa-li fa fa-cog fa-lg"></i> Together, metadata — think of it as "information about the information" — and system operations give sys admins knowledge about how the data is stored and how the warehouse operates.</li>
                </ul>
            </div>
            <div class="col-md-8 mt-4">
                <h5>SQL / NoSQL</h5>
                <p class="mb-4">
                    SQL (Structured Query Language) is a programming language that is used to manage 
                    data in relational databases. A NoSQL database, on the other hand, is self-describing,
                    so does not require a schema.The main differences between SQL and NoSQL are, Language,
                    Scalability, Community, Structure. 
                </p>
            </div>
            <div class="col-md-4 mt-4 text-center">
                <img src="img/sql.png" class="img-fluid" alt="img">
            </div>
            <br>
            <hr>
            <div class="col-md-8 mt-5">
                <h5>Structured & Unstructured</h5>
                <p class="mb-4">
                    Structured data is highly organized information that uploads neatly into a relational
                    database (think traditional row database structures), live in fixed fields, and is 
                    easily detectable via search operations or algorithms. Unstructured data may have its
                    own internal structure but does not conform neatly into a spreadsheet or database. 
                </p>
                <p>
                    Analysts can easily combine their current likely structured data with unstructured 
                    data, such as mapping social media with customer and sales automation data, for 
                    example. No matter the complexity and variance, BlueWhale permits users to leverage 
                    the data they need early on in order to generate the right outputs for better 
                    decision-making.
                </p>
            </div>
            <div class="col-md-4 mt-5 text-center">
                <img class="mx-auto img-fluid" src="img/unst.png" alt="img">
            </div>
        </div>
    </div>
</section>


<!-- Footer File Include -->
<?php include "footer.php"; ?>