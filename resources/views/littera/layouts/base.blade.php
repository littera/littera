<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Littera</title>

    {!! Html::style('css/common.css') !!}
    {!! Html::style('css/littera.css') !!}

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<section class="base">
    <aside class="sidebar">
        <div class="sidebar__brand">
            <figure class="text-center">
                <h3 class="brand__heading"><a href="{{ route('littera.dashboard.getIndex') }}">Littera</a></h3>
                <figcaption><small class="text-muted">CMS based on Laravel 5.1</small></figcaption>
            </figure>
        </div>
        <nav>
            <ul class="nav nav-pills nav-stacked nav-flat metismenu" id="sidebar__navigation">
                <li><a href="#"><i class="fa fa-file fa-btn"></i>Pages</a></li>
                <li class="dropdown active">
                    <a href="#">
                        <i class="fa fa-lock fa-btn"></i>Access
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-pills nav-stacked nav-flat nav-shift collapse in">
                        <li class="active"><a href="#"><i class="fa fa-user fa-btn"></i>Users</a></li>
                        <li><a href="#"><i class="fa fa-users fa-btn"></i>Roles</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div class="sidebar__footer text-center">
            <small class="text-muted">
                Powered by <a href="http://getlittera.com">Littera</a> {{ $littera_version }}
            </small>
        </div>
    </aside>
    <main class="page">
        <header class="page__header container-fluid clearfix">
            <nav class="pull-left">
                <ul class="nav nav-pills">
                    <li><a href="{{ url('/') }}" target="_blank" title="Preview"><i class="fa fa-desktop"></i></a></li>
                </ul>
            </nav>
            <nav class="pull-right">
                <ul class="nav nav-pills">
                    <li role="presentation" class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            <img src="https://www.gravatar.com/avatar/{{ md5($current_user->email) }}?d=identicon&s=25"
                                 alt="{{ $current_user->email }}" class="user-image" />
                            {{ $current_user->email }} <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right" role="menu">
                            <li><a href="{{ url('littera/users/'.$current_user->id) }}">Profile</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ url('auth/logout') }}">Logout</a></li>
                        </ul>
                    </li>
                    <li><a href="#" title="Settings"><i class="fa fa-cogs"></i></a></li>
                </ul>
            </nav>
        </header>
        <div class="page__content container-fluid">
            <section class="panel panel-default">
                <div class="panel-heading"><h3 class="panel-title">Heading</h3></div>
                <div class="panel-body">
                    <p>Quibusdam quaerat augue et commodi laborum? Omnis fringilla in consequuntur, consectetuer urna adipisci nemo ac minima, tempore dolorem, eaque sit elit? Proin placeat sit lacinia ipsa dolores, debitis pulvinar. Consequat, sociosqu congue dolor sit cumque atque! Cupidatat ullam omnis veniam, corporis potenti illo luctus atque cubilia, mollitia nascetur aspernatur elit. Adipisicing varius hendrerit nostra, ut ut facilisi alias? Quam corrupti! Nullam quia tellus explicabo! Saepe aperiam excepturi dignissim lectus, tempora? Nam anim adipisci inceptos expedita, blandit sapiente aperiam, turpis repudiandae? Arcu lacinia culpa dignissimos, curae fringilla, hendrerit nonummy, dictumst magna proin faucibus natoque maecenas, deleniti eos mauris vel quae! Magni eveniet ullamco aliquip fermentum, taciti, amet, quaerat impedit! Reiciendis ipsum quaerat.</p>

                    <p>Tristique, hymenaeos veniam, autem curae tempora minima hac risus, sapien, totam dolorem ipsa netus suspendisse tellus nibh aliqua excepteur varius fringilla. Mauris rutrum platea cumque pulvinar lorem convallis! Non doloremque? Nisi ullamco, dignissimos dis turpis? Velit, incididunt lorem felis faucibus irure curae esse, atque! Necessitatibus accusantium porttitor placerat natus, expedita atque facilisi dui ultricies! Assumenda pariatur blanditiis, hendrerit facilisi aperiam placerat odio maiores? Lorem, rerum fringilla, voluptatum eiusmod repellendus, nemo. Nostra excepteur alias donec reiciendis nascetur laborum lacinia, occaecat ea, nisl, reprehenderit eum felis. Sequi id nobis blandit. Quo, cillum rhoncus voluptates, atque dignissimos atque et eius dolores! Diam! Facere ullamco odio? Lobortis eos. Eos, animi! Aliqua maiores ante leo, doloribus.</p>

                    <p>Reprehenderit tempor illum, officiis excepturi deserunt dignissim fusce! Maecenas natus omnis, modi? Aliquid cillum odit, dictumst mollitia. Fames! Curabitur veritatis! Dictumst, deserunt! Nobis nesciunt! Quis ullamco, tempus quos? Anim. Auctor, repudiandae pede aliquam quas tenetur quod exercitationem aptent iusto exercitationem semper sem, accusantium fugit? Quisque! Euismod dis exercitationem amet, temporibus. Vestibulum magni, laudantium illo reiciendis orci, doloribus, nunc venenatis beatae suscipit aperiam consequuntur. Rutrum tortor, blanditiis quasi cupiditate suspendisse exercitationem? Cubilia potenti, facere tempore quisque ducimus, ut id dignissim molestie illo sapiente lectus volutpat aliquip minima corporis interdum, gravida nonummy molestie lorem hac, aute nisl diamlorem? Perferendis sunt officiis consequatur illo accusamus, nobis sed, dictum volutpat. Temporibus vivamus, vehicula nibh nulla.</p>

                    <p>Rutrum aptent natus alias senectus eiusmod illo facilis? Voluptates hymenaeos! Ac placerat? Ipsum eu debitis! Voluptatem nullam eligendi dui? Delectus quisquam distinctio quas semper. Quis commodi! Nunc fringilla deleniti metus quod excepteur ea, suspendisse! Leo dolores. Fugit voluptatum, repellendus aliqua! Fugiat aut ridiculus velit. Commodi? Lectus ipsum per at voluptatum iste quasi dui quam molestias. Penatibus netus. Porta voluptatum massa, sodales natoque sed montes inceptos dictum cubilia mollis ex tincidunt, conubia atque perferendis tellus nostra facilis. Explicabo justo, ac elit semper? Pellentesque penatibus maiores aptent? Distinctio ad amet quae, eum, porro auctor accumsan varius repellat habitasse? Mollitia torquent, id pulvinar, vero imperdiet rhoncus fames quisquam doloribus maxime, atque beatae sunt architecto.</p>

                    <p>Perferendis pharetra condimentum sequi posuere mi qui quaerat litora? Aperiam aperiam praesentium necessitatibus ut, ullamco auctor ipsa quos molestias pellentesque aspernatur labore, tristique id, dictumst, minim, scelerisque aptent auctor autem molestiae dignissimos. Consequatur congue vestibulum sodales mollis voluptate exercitationem. Eget nesciunt nibh ligula fusce aut litora minima sem necessitatibus vulputate. Sint vulputate debitis delectus adipiscing congue, sed molestiae natoque, iusto malesuada interdum. Platea eleifend, lectus, iaculis egestas pretium facilis tempora, non orci? Lobortis justo pretium quo, molestiae viverra. Hic rhoncus, nascetur suscipit incidunt egestas animi quasi do wisi provident erat? Blandit per commodo. Blanditiis, sagittis aliquam? Facilis felis turpis expedita accumsan? Diam quos sociis? Eius ducimus porttitor dolore? Sit velit? Culpa.</p>

                    <p>Hendrerit ducimus, rem blanditiis aptent molestias. Quasi quas gravida arcu? Adipisicing cursus euismod ullamcorper! Assumenda sem, eaque reiciendis, wisi exercitationem luctus! Vulputate officia laoreet. Dictum! Illo, incididunt euismod? Condimentum? Rutrum, erat labore. Gravida cubilia rhoncus. Fermentum tempus quae fuga luctus tempore penatibus optio sed maxime, pede congue lobortis natus aliqua. Necessitatibus consequat lorem rem laboriosam eaque magni fugit vulputate nobis, mus eos labore nihil exercitation maxime. Officiis, laoreet sagittis dolore porta proin. Ab pede augue, dignissim molestie excepturi pulvinar odio, malesuada, quod error adipiscing omnis voluptatem! Animi, quas tortor voluptates? Sunt pede repellendus facilisi sodales turpis? Ullamco proin, qui. Lobortis aliqua aliquid tempora eleifend. Quae consectetur eaque morbi! Nesciunt, viverra placeat.</p>

                    <p>Quo nisi dolor, eius, iusto dolore? Metus nihil? Quos tincidunt nisi bibendum sodales ornare purus quaerat, fugit metus. Neque nullam nam veritatis explicabo. Eiusmod! Consectetur, cursus! Facere morbi aptent explicabo repellendus sit numquam posuere. Ultricies, vivamus animi cumque lorem, habitasse porro venenatis! Sed delectus, culpa placeat vulputate doloribus! Conubia fringilla, nisl delectus maxime vel! Pariatur ab, rem, accusamus vivamus sunt? Inceptos nisl ducimus? Eos nam senectus vivamus montes! Modi et, iure pariatur, dictum etiam consequatur. Mi pede, hendrerit laborum wisi, saepe tempore ratione sociis erat erat veritatis arcu, suspendisse modi per hymenaeos cras asperiores, recusandae magna, egestas aptent pede deserunt! Excepteur torquent, ipsa sodales, dolor, delectus, quos ipsa, adipisci torquent mus.</p>

                    <p>Laboris tempus taciti quaerat beatae sollicitudin non ab sociis ridiculus! Molestias integer senectus nesciunt quasi cupiditate at tenetur integer proident? Delectus sunt donec, platea, doloremque voluptatibus cum? Maiores est curae consequuntur tempore gravida sociosqu, omnis ratione! Diamlorem velit fringilla dignissim. Ipsa? Expedita porttitor cumque nostrum? Reiciendis, culpa quo. Habitasse felis, rhoncus ornare fermentum taciti nonummy lacinia quo sollicitudin perferendis accusantium harum fames modi. Cum. Impedit eu maxime esse optio habitant lobortis molestiae, mauris dignissim non. Ex porta parturient sollicitudin odio? Congue? Mi odit aspernatur, eum saepe iste montes! Voluptate quos. Senectus sint, sociis velit? Incididunt, cumque, molestias potenti. Augue. Porro nobis placerat nascetur! Rutrum exercitation, wisi donec porttitor, earum adipisicing, occaecati.</p>

                    <p>Iure do incididunt taciti eiusmod cursus voluptas eum, fusce hac phasellus pretium reiciendis libero incididunt ornare arcu habitant. Cumque ea vel aliquid vulputate. Id eleifend pellentesque nostrud posuere deleniti officia, quam donec, scelerisque. Reprehenderit autem malesuada tristique potenti inceptos litora scelerisque lobortis, molestiae lacus eleifend, beatae orci aliqua? Class? Libero, ex! Minus. Fringilla harum vitae porro habitasse ut, a consequatur? Cubilia praesentium. Auctor cum! Placeat rerum tempor magni harum sodales dolorum justo? Inceptos tortor magni inceptos! Nec laborum proin nemo at, perspiciatis dignissimos repellat! Repudiandae debitis? Nihil molestiae? Iure mollitia, platea ex? Class urna porta urna! Nullam expedita? Natus dapibus assumenda laoreet, voluptatibus velit, molestias, laudantium arcu occaecati, mollitia optio. Cillum.</p>

                    <p>Delectus fringilla aptent aliquip dolore, quas elit quos aperiam tortor laboriosam malesuada, placeat minim? Habitant! Rerum phasellus risus illo unde erat eiusmod, tenetur laborum, rem pariatur quae potenti, illo optio assumenda odio, etiam, corrupti illum sit, lorem ullamcorper. Per morbi. Dui? Volutpat. Quisquam doloremque error dui cras optio posuere habitasse tempor assumenda eveniet harum cillum facere illo. Praesentium est! Laudantium, laboris mollitia pulvinar labore, ea magnis, dicta quia tortor tellus. Metus non, corporis voluptates litora vitae mollis consectetuer sint dignissimos, natoque! Culpa sagittis pede bibendum sed, occaecat, tempore sodales quos justo. Sequi! Quis suspendisse lacinia nibh saepe molestiae dui gravida quod hac sollicitudin repellendus pellentesque! Praesent, rutrum proident inceptos risus, ullamco.</p>

                    <p>Dolores leo minima? Dictumst, quidem litora excepturi ex at assumenda explicabo! Aut! Nostrum vitae voluptatem aut! Lectus consectetuer anim ultrices consequat quas molestias? Nesciunt, nascetur bibendum commodi nihil incidunt neque etiam modi? Sociis quae consequuntur wisi. Molestie feugiat aenean cupidatat perferendis earum. Id earum praesentium. Facilisi natus justo nisl quos blandit adipiscing mattis facere ullamcorper volutpat. Curae maxime fringilla cupiditate. Quisquam commodi conubia ab facilis culpa? Fuga quos! Accusantium porta voluptate impedit odio lacinia excepturi mi urna molestiae nemo sagittis, accusantium varius ad ullamcorper curae temporibus tellus, et? Occaecati montes, ad eius phasellus duis hic a. Id ante consectetuer fermentum, quia fugiat, cupidatat, minim, hac platea incididunt harum! Molestie doloribus tempor.</p>
                </div>
            </section>
        </div>
    </main>
</section>

{!! Html::script('js/vendor.js') !!}
{!! Html::script('js/littera.js') !!}
<script>
    $(function () {
        $('#sidebar__navigation').metisMenu();
    });
</script>
</body>
</html>
