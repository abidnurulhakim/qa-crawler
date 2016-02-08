<h1>
	<b>
	@yield('page-header')
	</b>
</h1>
<ol class="breadcrumb">
    <li>
    	<a href="{{ route('tasks.index') }}"><i class="fa fa-dashboard"></i> Home</a>
    </li>
    <li class="active">
    	@yield('page-header-toolbar')
    </li>
</ol>