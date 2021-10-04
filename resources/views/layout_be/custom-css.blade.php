<style>
/* .menu-left{
 text-align: center;   
}
.sticky-footer{
    height: 5rem;
    line-height: 5rem;
}
.list-group{
   
}
.list-group-item{
    border: none !important;
    border-bottom: 1px solid black!important;
    color: white;
}
.image-header{
    margin: 0 auto;
}
.copyright{
    color: white;
} */

body {
    font-family: "Helvetica";
   
   
}
a{
    text-decoration: none !important;
    color:#111;
}

/* navbar */

.sidebar {
    height: 100vh;
    background: linear-gradient(rgba(0, 0, 0, .7), rgba(0, 0, 0, .9)), url(images/img1.jpeg);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    box-shadow: 5px 7px 25px #999;
}

.bottom-border {
    border-bottom: 1px groove#eee;
}

.sidebar-link {
    transition: all .4s;
}

.sidebar-link:hover {
    background-color: #444;
    border-radius: 5px;
}

.current {
    background-color: #f44336;
    border-radius: 7px;
    box-shadow: 2px 5px 10px #111;
    transition: all .3s;
}

.current:hover {
    background-color: #f66436;
    border-radius: 7px;
    box-shadow: 2px 5px 20px #111;
    transform: translateY(-1px);
}

#search-input{
    background: transparent;
    border: none;
    border-radius: 0;
    border-bottom: 2px solid #999;
    transition: all .4s;
}

#search-input:focus{
    background: transparent;
    box-shadow: none;
    border-bottom: 2px solid #dc3545;

}
#search-button{
    border-radius: 50%;
    padding: 10px 16px;
    transition: all .4s;
}

#search-button:hover{
    background-color: #eee;
    transform: translateY(-1px);
}


.icon-parent{
    position: relative;


}
.icon-bullet::after{
    content: "";
    position: absolute;
    top: 7px;
    left: 15px;
    height: 12px;
    width: 12px;
    background-color:#f44336;
    border-radius: 50%;


}

@media (max-width: 768px)
{
    .sidebar{
        position: static;
        height: auto;

    }
    .top-navbar{
        position: static;

    }
}






/* end navbar */
</style>
