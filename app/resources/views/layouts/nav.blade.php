<script>
    $(document).ready(function () {
        $('li.active').removeClass('active');
        $('a[href="' + window.location.href + '"]').closest('li').closest('ul').closest('li').addClass('active');
        $('a[href="' + window.location.href + '"]').closest('li').addClass('active');
    });
</script>
<aside id="leftsidebar" class="sidebar">
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li class="sidebar-user-panel active">
                <div class="user-panel">
                    <div class=" image">
                        <img src="{{asset('images/usr.png')}}" class="img-circle user-img-circle" alt="User Image" />
                    </div>
                </div>
                <div class="profile-usertitle">
                    <div class="sidebar-userpic-name" ></div>
                    <div class="profile-usertitle-job "> </div>
                </div>
            </li>
            <li class="active">
                <a href="{{url('dashboard')}}">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>پیشخوان</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="fas fa-toolbox"></i>
                    <span>امکانات</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="{{url('dashboard/student/score')}}">ثبت نمره</a>
                    </li>
                    <li>
                        <a href="{{url('dashboard/student/attendance')}}">حضور و غیاب</a>
                    </li>
                    <li>
                        <a href="{{url('dashboard/tools/notifications')}}">ارسال اطلاعیه</a>
                    </li>
                    <li>
                        <a href="{{url('dashboard/tools/news')}}">ارسال خبر</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">fiber_new</i>
                    <span>خبر</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="{{url('dashboard/news')}}">خبرها</a>
                    </li>
                    <li>
                        <a href="{{url('dashboard/tools/news/add')}}">ارسال خبر</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="fas fa-user-graduate"></i>
                    <span>دانش آموزان</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="{{url('dashboard/students')}}">لیست دانش آموزان</a>
                    </li>
                    <li>
                        <a href="{{url('dashboard/students/add')}}">افزودن</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="fas fa-chalkboard-teacher"></i>
                    <span>اساتید</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="{{url('dashboard/teachers')}}">لیست اساتید</a>
                    </li>
                    <li>
                        <a href="{{url('dashboard/teachers/add')}}">افزودن</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">class</i>
                    <span>کلاس ها</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="{{url('dashboard/class')}}">لیست کلاس ها</a>
                    </li>
                    <li>
                        <a href="{{url('dashboard/class/add')}}">افزودن</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{url('dashboard/chat/box')}}]">
                    <i class="material-icons">inbox</i>
                    <span>چت باکس</span>
                </a>
            </li>
        </ul>
    </div>

</aside>
