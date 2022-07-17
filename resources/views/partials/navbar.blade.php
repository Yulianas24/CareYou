

<nav class="
relative
w-full
flex flex-wrap
items-center
justify-between
py-4
bg-gray-100
text-gray-500
shadow-lg
navbar navbar-expand-lg navbar-light
">
<div class="container-fluid w-full flex flex-wrap items-center justify-between px-6">

<div class="collapse navbar-collapse flex-grow items-center" id="navbarSupportedContent">

<!-- Left links -->
<div class="flex space-x-4 ">
  <a class="text-xl text-black" href="#">Navbar</a>
  <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
  <a href="/" class="{{ ($title==="Home") ? 'bg-gray-700 text-white' : 'hover:bg-gray-700 hover:text-white' }}  px-3 py-2 rounded-md text-sm font-medium">Dashboard</a>

  <a href="/about" class="{{ ($title==="About") ? 'bg-gray-700 text-white' : 'hover:bg-gray-700 hover:text-white' }}  px-3 py-2 rounded-md text-sm font-medium">About</a>

  <a href="/posts" class="{{ ($title==="Posts") ? 'bg-gray-700 text-white' : 'hover:bg-gray-700 hover:text-white' }}  px-3 py-2 rounded-md text-sm font-medium">Posts</a>

</div>
<!-- Left links -->
</div>
<!-- Collapsible wrapper -->
</div>
  </nav>