function check_classes(){
    var all = document.getElementById('nav_all');
    var press = document.getElementById('nav_press');
    var env = document.getElementById('nav_environment');
    var sus = document.getElementById('nav_sustainability');
    var other = document.getElementById('nav_other');

    if (all.classList.contains('post-nav-active')){
        document.getElementById('all').style.display = "block";
        document.getElementById('press_release').style.display = "none";
        document.getElementById('environment').style.display = "none";
        document.getElementById('sustainability').style.display = "none";
        document.getElementById('other').style.display = "none";
    }

    if (press.classList.contains('post-nav-active')){
        document.getElementById('all').style.display = "none";
        document.getElementById('press_release').style.display = "block";
        document.getElementById('environment').style.display = "none";
        document.getElementById('sustainability').style.display = "none";
        document.getElementById('other').style.display = "none";
    }

    if (env.classList.contains('post-nav-active')){
        document.getElementById('all').style.display = "none";
        document.getElementById('press_release').style.display = "none";
        document.getElementById('environment').style.display = "block";
        document.getElementById('sustainability').style.display = "none";
        document.getElementById('other').style.display = "none";
    }

    if (sus.classList.contains('post-nav-active')){
        document.getElementById('all').style.display = "none";
        document.getElementById('press_release').style.display = "none";
        document.getElementById('environment').style.display = "none";
        document.getElementById('sustainability').style.display = "block";
        document.getElementById('other').style.display = "none";
    }

    if (other.classList.contains('post-nav-active')){
        document.getElementById('all').style.display = "none";
        document.getElementById('press_release').style.display = "none";
        document.getElementById('environment').style.display = "none";
        document.getElementById('sustainability').style.display = "none";
        document.getElementById('other').style.display = "block";
    }
}

check_classes();

var all = document.getElementById('nav_all');
var press = document.getElementById('nav_press');
var env = document.getElementById('nav_environment');
var sus = document.getElementById('nav_sustainability');
var other = document.getElementById('nav_other');

all.addEventListener('click',function () {
    all.classList.add("post-nav-active");
    press.classList.remove("post-nav-active");
    env.classList.remove("post-nav-active");
    sus.classList.remove("post-nav-active");
    other.classList.remove("post-nav-active");
    check_classes();
}  );

press.addEventListener('click',function () {
    all.classList.remove("post-nav-active");
    press.classList.add("post-nav-active");
    env.classList.remove("post-nav-active");
    sus.classList.remove("post-nav-active");
    other.classList.remove("post-nav-active");
    check_classes();
}  );

env.addEventListener('click',function () {
    all.classList.remove("post-nav-active");
    press.classList.remove("post-nav-active");
    env.classList.add("post-nav-active");
    sus.classList.remove("post-nav-active");
    other.classList.remove("post-nav-active");
    check_classes();
}  );

sus.addEventListener('click',function () {
    all.classList.remove("post-nav-active");
    press.classList.remove("post-nav-active");
    env.classList.remove("post-nav-active");
    sus.classList.add("post-nav-active");
    other.classList.remove("post-nav-active");
    check_classes();
}  );

other.addEventListener('click',function () {
    all.classList.remove("post-nav-active");
    press.classList.remove("post-nav-active");
    env.classList.remove("post-nav-active");
    sus.classList.remove("post-nav-active");
    other.classList.add("post-nav-active");
    check_classes();
}  );