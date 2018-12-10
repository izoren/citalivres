<?php
/**
 * Created by PhpStorm.
 * User: Proprietaire
 * Date: 14/11/2018
 * Time: 15:22
 */
?>
<header id="header">
    <div class="container">
        <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
                <a href="{{url('/')}}"><img src="/img/logo-2.png" alt="" title="" /></a>
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="{{Request::is('/')?'active' : ''}}">
                        <a class="nav-link" href="{{url('/')}}">Accueil</a>
                    </li>
                    <li class="menu-has-children">
                        <a href="{{route('auteurs.invites')}}">Auteurs</a>

                        <ul class="">
                            <li>
                                <a href="{{route('auteurs.invites')}}">Auteurs Invités</a>
                            </li>
                            <li>
                                <a href="{{route('auteurs.partenaires')}}">Auteurs Partenaires</a>
                            </li>
                            <li>
                                <a href="{{route('auteurs.editeurs')}}">Editeurs</a>
                            </li>
                        </ul>
                    </li>
                    <li class="{{Request::is('/')?'active' : ''}}">
                        <a href="{{url('/partenaires')}}">Partenaires</a>
                    </li>
                    <li class="{{Request::is('/')?'active' : ''}}">
                        <a href="{{url('/programme')}}">Programme</a>
                    </li>
                    <li class="{{Request::is('/')?'active' : ''}}">
                        <a href="{{url('/contact')}}">Contact</a>
                    </li>
                    <li class="menu-has-children">
                        <a href="">Pages</a>
                        <ul class="">
                            <li>
                                <a href="blog-single.html">Blog Single</a>
                            </li>
                            <li>
                                <a href="category.html">Category</a>
                            </li>
                            <li>
                                <a href="elements.html">Elements</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </div>
</header><!-- #header -->
