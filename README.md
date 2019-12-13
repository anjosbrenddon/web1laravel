<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Sobre a aplicação

O projeto consiste em um sistema de controle de viagens. O sistema foi desenvolvido com o objetivo de automatizar o processo de saída e chegada de veículos para instituições que oferecem serviços de entrega. Para isso um registro deve ser efetuado pelo usuário, ao acessar a dashboard através do login, será possível efetuar cadastro de motoristas e veículos; o cadastro de viagens necessita de ao menos um veículo e motorista e é efetuado em duas etapas: Inicia o cadastro na saída para a entrega e finaliza ao chegar.

## Projeto

Equipe: Brenddon e Luiz.<br/>

Projeto de PHP (Projeto Alternativo). Valor 3,5 Pontos. <br/>

Sistema de controle de viagens
 

## Tecnologias utilizadas
<ul>
<li>Laravel</li>
<li>Bootstrap</li>
<li>Jquery</li>
<li>
    Bibliotecas Jquery:
    <ul>
        <li>Jquery-Confirm: <a href="https://craftpip.github.io/jquery-confirm/" target="_blank">https://craftpip.github.io/jquery-confirm/</a>  //Biblioteca de alertas</li>
        <li>Jquery-Mask :<a href="https://igorescobar.github.io/jQuery-Mask-Plugin/" target="_blank">https://igorescobar.github.io/jQuery-Mask-Plugin/</a>   //biblioteca de máscaras para inputs</li>
        <li>Bootstrap-datepicker: <a href="https://bootstrap-datepicker.readthedocs.io/en/latest/" target="_blank">https://bootstrap-datepicker.readthedocs.io/en/latest/</a>  //Máscara de data para inputs</li>
        <li>WickedPicker: <a href=" https://ericjgagnon.github.io/wickedpicker/" target="_blank">https://ericjgagnon.github.io/wickedpicker/</a> //Máscara de horário para inputs</li>
    </ul>
</li>
<li>Banco MySql</li>
</ul>

## Banco de dados
O modelo entidade relacionamento encontra-se no diretório /database do projeto, nos formatos .pdf e workbench.
<p>As migrations estão configuradas para gerar o banco automaticamente, para isso: </p>
    Crie uma base mysql e configure a conexão no arquivo <code>.env</code><br/>
    ex: <br>
    DB_CONNECTION=mysql <br>
    DB_HOST=127.0.0.1 <br>
    DB_PORT=3306 <br>
    DB_DATABASE=web1laravel <br>
    DB_USERNAME=root <br>
    DB_PASSWORD=
    <p>Após esta etapa excute o comando: <code>php artisan migrate:fresh</code> </p>

Caso eventualmente não utilize as migrations, importe a base de dados <code>web1laravel.sql</code> disponível no diretório /database.

## Inicialização do projeto
<p>Os comandos seguintes devem ser executados no diretório do projeto clonado ou devidamente baixado e extraído:</p>

<code>composer install</code><br>
<code>cp .env.example .env</code><br>
<code>php artisan key:generate</code><br>

Requer PHP v. 7.2 +

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[British Software Development](https://www.britishsoftware.co)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- [UserInsights](https://userinsights.com)
- [Fragrantica](https://www.fragrantica.com)
- [SOFTonSOFA](https://softonsofa.com/)
- [User10](https://user10.com)
- [Soumettre.fr](https://soumettre.fr/)
- [CodeBrisk](https://codebrisk.com)
- [1Forge](https://1forge.com)
- [TECPRESSO](https://tecpresso.co.jp/)
- [Runtime Converter](http://runtimeconverter.com/)
- [WebL'Agence](https://weblagence.com/)
- [Invoice Ninja](https://www.invoiceninja.com)
- [iMi digital](https://www.imi-digital.de/)
- [Earthlink](https://www.earthlink.ro/)
- [Steadfast Collective](https://steadfastcollective.com/)
- [We Are The Robots Inc.](https://watr.mx/)
- [Understand.io](https://www.understand.io/)
- [Abdel Elrafa](https://abdelelrafa.com)
- [Hyper Host](https://hyper.host)
- [Appoly](https://www.appoly.co.uk)
- [OP.GG](https://op.gg)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
