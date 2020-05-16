<!DOCTYPE html>
<html lang="zxx">
<head>
	@include ("site.includes.head")
</head>

<body class="crumina-grid">
    @include ("site.includes.header")

    @yield('content')

    @include ("site.includes.login")
    @include ("site.includes.register")
    @include("site.includes.footer")
    @include("site.includes.js")
</body>
</html>