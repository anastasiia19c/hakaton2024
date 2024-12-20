<?php
session_start();

if (!isset($_SESSION['id'])) {
    header("Location: ../connexion");
    exit();
}
?>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Classement</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <nav class="navbar">
        <a href="../../../back/controller/logout.php" class="btn">Se déconnecter</a>
        <ul>
        <li><a href="../accueil/index.php" class="btn">Accueil</a></li>
            <li><a href="../vote/vote.php" class="btn">Vote</a></li>
            <li><a href="../chanson/indexChanson.php" class="btn">Ajouter une chanson</a></li>
            <li><a href="../classement/classement.php" class="btn">Classement</a></li>
            <li><a href="../admin/indexAdmin.php" class="btn">Admin</a></li>
        </ul>
    </nav>
</header>
<!-- Accueil -->
<div class="d-flex flex-column flex-lg-row h-lg-full bg-surface-secondary">
    <!-- Vertical Navbar -->

    <!-- flocon -->
    <div class="navbar-user d-lg-none">
        <!-- Dropdown -->
        <div class="snowflakes" aria-hidden="true">
            <div class="snowflake">❄</div>
            <div class="snowflake">❅</div>
            <div class="snowflake">❆</div>
            <div class="snowflake">❄</div>
            <div class="snowflake">❅</div>
        </div>

    </div>
    <!-- Main content -->
    <div class="h-screen flex-grow-1 overflow-y-lg-auto">
        <!-- Header -->
        <header class="bg-surface-primary border-bottom pt-6">
            <div class="container-fluid">
                <div class="mb-npx">
                    <div class="row align-items-center">
                        <div class="col-sm-6 col-12 mb-4 mb-sm-0">
                            <!-- Title -->
                            <h1 class="h2 mb-0 ls-tight">Classement</h1>
                        </div>

                    </div>
                    <!-- Nav -->
                    <ul class="nav nav-tabs mt-4 overflow-x border-0">
                        <li class="nav-item ">
                            <a href="#" class="nav-link active">All chanson</a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        <!-- Main -->
        <main class="py-6 bg-surface-secondary">
            <div class="container-fluid">
                <div class="card shadow border-0 mb-7">
                    <div class="card-header">
                        <h5 class="mb-0">Chansons</h5>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover table-nowrap">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">Auteur</th>
                                <th scope="col">Date</th>
                                <th scope="col">Titre</th>
                                <th scope="col">Vote</th>
                                <th scope="col">Meeting</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="avatar avatar-sm rounded-circle me-2" viewBox="0 0 16 16" >
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M9.283 4.002H7.971L6.072 5.385v1.271l1.834-1.318h.065V12h1.312z"/>
                                    </svg>
                                    <a class="text-heading font-semibold" href="#">
                                        Robert Fox
                                    </a>
                                </td>
                                <td>
                                    Feb 15, 2021
                                </td>
                                <td>
                                    <img src="../../public/img/Boîte Cadeau 3D.jpg" class="avatar avatar-xs rounded-circle me-2"/><a class="text-heading font-semibold" href="#">
                                        Titre
                                    </a>
                                </td>
                                <td>
                                    300.500
                                </td>
                                <td>
                                        <span class="badge badge-lg badge-dot">
                                            <i class="bg-success"></i>Scheduled
                                        </span>
                                </td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-neutral">View</a>
                                    <button type="button" class="btn btn-sm btn-square btn-neutral text-danger-hover">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="avatar avatar-sm rounded-circle me-2" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M6.646 6.24c0-.691.493-1.306 1.336-1.306.756 0 1.313.492 1.313 1.236 0 .697-.469 1.23-.902 1.705l-2.971 3.293V12h5.344v-1.107H7.268v-.077l1.974-2.22.096-.107c.688-.763 1.287-1.428 1.287-2.43 0-1.266-1.031-2.215-2.613-2.215-1.758 0-2.637 1.19-2.637 2.402v.065h1.271v-.07Z"/>
                                    </svg>
                                    <a class="text-heading font-semibold" href="#">
                                        Darlene Robertson
                                    </a>
                                </td>
                                <td>
                                    Apr 15, 2021
                                </td>
                                <td>
                                    <img src="../../public/img/Boîte Cadeau 3D.jpg" class="avatar avatar-xs rounded-circle me-2"/><a class="text-heading font-semibold" href="#">
                                        Titre
                                    </a>
                                </td>
                                <td>
                                    2.750
                                </td>
                                <td>
                                        <span class="badge badge-lg badge-dot">
                                            <i class="bg-warning"></i>Postponed
                                        </span>
                                </td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-neutral">View</a>
                                    <button type="button" class="btn btn-sm btn-square btn-neutral text-danger-hover">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="avatar avatar-sm rounded-circle me-2" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-8.082.414c.92 0 1.535.54 1.541 1.318.012.791-.615 1.36-1.588 1.354-.861-.006-1.482-.469-1.54-1.066H5.104c.047 1.177 1.05 2.144 2.754 2.144 1.653 0 2.954-.937 2.93-2.396-.023-1.278-1.031-1.846-1.734-1.916v-.07c.597-.1 1.505-.739 1.482-1.876-.03-1.177-1.043-2.074-2.637-2.062-1.675.006-2.59.984-2.625 2.12h1.248c.036-.556.557-1.054 1.348-1.054.785 0 1.348.486 1.348 1.195.006.715-.563 1.237-1.342 1.237h-.838v1.072h.879Z"/>
                                    </svg>
                                    Auteur
                                    </a>
                                </td>
                                <td>
                                    Mar 20, 2021
                                </td>
                                <td>
                                    <img src="../../public/img/Boîte Cadeau 3D.jpg" class="avatar avatar-xs rounded-circle me-2"/><a class="text-heading font-semibold" href="#">
                                        Titre
                                    </a>
                                </td>
                                <td>
                                    4.200
                                </td>
                                <td>
                                        <span class="badge badge-lg badge-dot">
                                            <i class="bg-success"></i>Scheduled
                                        </span>
                                </td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-neutral">View</a>
                                    <button type="button" class="btn btn-sm btn-square btn-neutral text-danger-hover">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="../../public/img/Boîte Cadeau 3D.jpg" class="avatar avatar-xs rounded-circle me-2"/><a class="text-heading font-semibold" href="#">
                                        Titre
                                    </a>
                                </td>
                                <td>
                                    Feb 15, 2021
                                </td>
                                <td>
                                    <img src="../../public/img/Boîte Cadeau 3D.jpg" class="avatar avatar-xs rounded-circle me-2"/><a class="text-heading font-semibold" href="#">
                                        Titre
                                    </a>
                                </td>
                                <td>
                                    3.500
                                </td>
                                <td>
                                        <span class="badge badge-lg badge-dot">
                                            <i class="bg-dark"></i>Not discussed
                                        </span>
                                </td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-neutral">View</a>
                                    <button type="button" class="btn btn-sm btn-square btn-neutral text-danger-hover">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img alt="..." src="https://images.unsplash.com/photo-1608976328267-e673d3ec06ce?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80" class="avatar avatar-sm rounded-circle me-2">
                                    <a class="text-heading font-semibold" href="#">
                                        Cody Fisher
                                    </a>
                                </td>
                                <td>
                                    Apr 10, 2021
                                </td>
                                <td>
                                    <img src="../../public/img/Boîte Cadeau 3D.jpg" class="avatar avatar-xs rounded-circle me-2"/><a class="text-heading font-semibold" href="#">
                                        Titre
                                    </a>
                                </td>
                                <td>
                                    1.500
                                </td>
                                <td>
                                        <span class="badge badge-lg badge-dot">
                                            <i class="bg-danger"></i>Canceled
                                        </span>
                                </td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-neutral">View</a>
                                    <button type="button" class="btn btn-sm btn-square btn-neutral text-danger-hover">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img alt="..." src="https://images.unsplash.com/photo-1502823403499-6ccfcf4fb453?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80" class="avatar avatar-sm rounded-circle me-2">
                                    <a class="text-heading font-semibold" href="#">
                                        Robert Fox
                                    </a>
                                </td>
                                <td>
                                    Feb 15, 2021
                                </td>
                                <td>
                                    <img src="../../public/img/Boîte Cadeau 3D.jpg" class="avatar avatar-xs rounded-circle me-2"/><a class="text-heading font-semibold" href="#">
                                        Titre
                                    </a>
                                </td>
                                <td>
                                    3.500
                                </td>
                                <td>
                                        <span class="badge badge-lg badge-dot">
                                            <i class="bg-success"></i>Scheduled
                                        </span>
                                </td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-neutral">View</a>
                                    <button type="button" class="btn btn-sm btn-square btn-neutral text-danger-hover">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img alt="..." src="https://images.unsplash.com/photo-1610271340738-726e199f0258?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80" class="avatar avatar-sm rounded-circle me-2">
                                    <a class="text-heading font-semibold" href="#">
                                        Darlene Robertson
                                    </a>
                                </td>
                                <td>
                                    Apr 15, 2021
                                </td>
                                <td>
                                    <img src="../../public/img/Boîte Cadeau 3D.jpg" class="avatar avatar-xs rounded-circle me-2"/><a class="text-heading font-semibold" href="#">
                                        Titre
                                    </a>
                                </td>
                                <td>
                                    2.750
                                </td>
                                <td>
                                        <span class="badge badge-lg badge-dot">
                                            <i class="bg-warning"></i>Postponed
                                        </span>
                                </td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-neutral">View</a>
                                    <button type="button" class="btn btn-sm btn-square btn-neutral text-danger-hover">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img alt="..." src="https://images.unsplash.com/photo-1610878722345-79c5eaf6a48c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80" class="avatar avatar-sm rounded-circle me-2">
                                    <a class="text-heading font-semibold" href="#">
                                        Theresa Webb
                                    </a>
                                </td>
                                <td>
                                    Mar 20, 2021
                                </td>
                                <td>
                                    <img src="../../public/img/Boîte Cadeau 3D.jpg" class="avatar avatar-xs rounded-circle me-2"/><a class="text-heading font-semibold" href="#">
                                        Titre
                                    </a>
                                </td>
                                <td>
                                    4.200
                                </td>
                                <td>
                                        <span class="badge badge-lg badge-dot">
                                            <i class="bg-success"></i>Scheduled
                                        </span>
                                </td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-neutral">View</a>
                                    <button type="button" class="btn btn-sm btn-square btn-neutral text-danger-hover">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img alt="..." src="https://images.unsplash.com/photo-1612422656768-d5e4ec31fac0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80" class="avatar avatar-sm rounded-circle me-2">
                                    <a class="text-heading font-semibold" href="#">
                                        Kristin Watson
                                    </a>
                                </td>
                                <td>
                                    Feb 15, 2021
                                </td>
                                <td>
                                    <img src="../../public/img/Boîte Cadeau 3D.jpg" class="avatar avatar-xs rounded-circle me-2"/><a class="text-heading font-semibold" href="#">
                                        Titre
                                    </a>
                                </td>
                                <td>
                                    3.500
                                </td>
                                <td>
                                        <span class="badge badge-lg badge-dot">
                                            <i class="bg-dark"></i>Not discussed
                                        </span>
                                </td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-neutral">View</a>
                                    <button type="button" class="btn btn-sm btn-square btn-neutral text-danger-hover">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img alt="..." src="https://images.unsplash.com/photo-1608976328267-e673d3ec06ce?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80" class="avatar avatar-sm rounded-circle me-2">
                                    <a class="text-heading font-semibold" href="#">
                                        Cody Fisher
                                    </a>
                                </td>
                                <td>
                                    Apr 10, 2021
                                </td>
                                <td>
                                    <img src="../../public/img/Boîte Cadeau 3D.jpg" class="avatar avatar-xs rounded-circle me-2"/><a class="text-heading font-semibold" href="#">
                                        Titre
                                    </a>
                                </td>
                                <td>
                                    1.500
                                </td>
                                <td>
                                        <span class="badge badge-lg badge-dot">
                                            <i class="bg-danger"></i>Canceled
                                        </span>
                                </td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-neutral">View</a>
                                    <button type="button" class="btn btn-sm btn-square btn-neutral text-danger-hover">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer border-0 py-5">
                        <span class="text-muted text-sm">flo</span>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
<script src="app.js"></script>

</body>
</html>