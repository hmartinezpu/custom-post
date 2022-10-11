<?php get_header()?>
<style>
    .lista-clases{
  margin-top:4rem;
}
/** Clases **/
.lista-clases, 
.listado-blog {
    margin-top: 4rem;
}
@media (min-width: 768px) {
    .lista-clases, 
    .listado-blog {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }
}

.listado-blog .card .contenido {
    padding: 0 2rem 2rem 2rem;
    text-align: center;
}
@media (min-width: 768px) {
    .listado-blog .card .contenido {
        text-align: left;
    }
}
.listado-blog .card h3 {
    margin: 0;
}

/** Cards **/

@media (min-width: 768px) {
    .gradient::after {
        content: '';
        display: block;
        position: absolute;
        left: 0;
        right: 0;
        bottom: 0;
        top: 0;
      /* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#000000+0,000000+100&0+39,0.3+69,0.7+100 */
background: -moz-linear-gradient(top,  rgba(0,0,0,0) 0%, rgba(0,0,0,0) 39%, rgba(0,0,0,0.3) 69%, rgba(0,0,0,0.7) 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top,  rgba(0,0,0,0) 0%,rgba(0,0,0,0) 39%,rgba(0,0,0,0.3) 69%,rgba(0,0,0,0.7) 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom,  rgba(0,0,0,0) 0%,rgba(0,0,0,0) 39%,rgba(0,0,0,0.3) 69%,rgba(0,0,0,0.7) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000', endColorstr='#b3000000',GradientType=0 ); /* IE6-9 */


    }
}
.card {
    margin-bottom: 4rem;
    border-bottom: 1px solid var(--grisClaro);
    overflow: hidden;
}
.card:last-of-type {
    border: none;
}
@media (min-width: 768px) {
    .card {
        flex: 0 0 calc(50% - 2rem);
        position: relative;
        border: none;
    }
}
.card img {
    display: block;
    transition: transform .5s ease;
}
.card:hover img {
    transform: scale(1.1);
}
.card .contenido {
    padding: 2rem;
}
@media (min-width: 768px) {
    .card .contenido {
        position: absolute;
        bottom: 0;
        left: 0;
        text-align: left;
        z-index: 2;
    }
}
.card .contenido h3 {
    line-height: 1;
    color: var(--colorPrimario);
}
@media (min-width: 768px) {
    .card .contenido h3 {
        color: var(--blanco);
    }
}
.card .contenido p {
    font-weight: 700;
    font-size: 2rem;
    margin: 0;
}
@media (min-width: 768px) {
    .card .contenido p {
        color: var(--colorPrimario);
    }
}
.card .contenido .meta,
.card .contenido .meta a {
    color: var(--negro);
}
@media (min-width: 768px) {
    .card .contenido .meta,
    .card .contenido .meta a {
        color: var(--blanco);
    }
}
.card .contenido .meta span {
    color: var(--colorPrimario);
}
.card .contenido .meta {
    font-size: 1.4rem;
}
</style>
<div class="bodypost">
<?php

lista_clases();

?>
</div>
