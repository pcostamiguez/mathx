<!doctype html>
<html data-theme="corporate">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body>
<div class="flex flex-col h-screen">
    <div class="navbar bg-slate-300">
        <div class="flex-1">
            <a class="btn btn-ghost text-xl">MathX</a>
        </div>
        <div class="flex-none">
            <div class="dropdown dropdown-end">
                <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
                    <div class="indicator">
                        <svg height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path opacity="0.5" d="M18.7491 9V9.7041C18.7491 10.5491 18.9903 11.3752 19.4422 12.0782L20.5496 13.8012C21.5612 15.3749 20.789 17.5139 19.0296 18.0116C14.4273 19.3134 9.57274 19.3134 4.97036 18.0116C3.21105 17.5139 2.43882 15.3749 3.45036 13.8012L4.5578 12.0782C5.00972 11.3752 5.25087 10.5491 5.25087 9.7041V9C5.25087 5.13401 8.27256 2 12 2C15.7274 2 18.7491 5.13401 18.7491 9Z" fill="#1C274C"></path>
                                <path d="M7.24316 18.5454C7.8941 20.5506 9.77767 22.0002 11.9998 22.0002C14.222 22.0002 16.1055 20.5506 16.7565 18.5454C13.611 19.1357 10.3886 19.1357 7.24316 18.5454Z" fill="#1C274C"></path>
                            </g>
                        </svg>
                        <span class="badge badge-sm indicator-item text-white bg-red-500 rounded-full w-6 h-6 flex items-center justify-center">8</span>
                    </div>
                </div>
                <div tabindex="0" class="card card-compact dropdown-content bg-base-100 z-[1] mt-3 w-80 shadow-lg rounded-lg">
                    <div class="card-body">
                        <span class="text-lg font-bold text-primary mb-2">3 Notificações não lidas</span>
                        <!-- Notificação 1 -->
                        <div class="flex items-start mb-3">
                            <div class="flex-shrink-0">
                                <div class="w-10 h-10 bg-secondary text-white rounded-full flex items-center justify-center">1</div>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium">Nova mensagem recebida</p>
                                <p class="text-xs text-gray-500">Há 2 minutos</p>
                            </div>
                        </div>
                        <!-- Notificação 2 -->
                        <div class="flex items-start mb-3">
                            <div class="flex-shrink-0">
                                <div class="w-10 h-10 bg-secondary text-white rounded-full flex items-center justify-center">2</div>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium">Atualização de status do pedido</p>
                                <p class="text-xs text-gray-500">Há 10 minutos</p>
                            </div>
                        </div>
                        <!-- Notificação 3 -->
                        <div class="flex items-start mb-3">
                            <div class="flex-shrink-0">
                                <div class="w-10 h-10 bg-secondary text-white rounded-full flex items-center justify-center">3</div>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium">Novo comentário na sua postagem</p>
                                <p class="text-xs text-gray-500">Há 30 minutos</p>
                            </div>
                        </div>
                        <div class="card-actions">
                            <button class="btn btn-secondary btn-block">Ver Todas</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dropdown dropdown-end">
                <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                    <div class="w-10 rounded-full">
                        <img alt="Tailwind CSS Navbar component" src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                    </div>
                </div>
                <ul tabindex="0" class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
                    <li>
                        <a class="justify-between">
                            Perfil
                        </a>
                    </li>
                    <li><a>Alterar senha</a></li>
                    <li><a>Sair</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="flex-grow content">

    </div>
    <footer class="footer footer-center bg-base-300 text-base-content p-4">
        <aside>
            <p>Copyright © {{ date('Y') }}</p>
        </aside>
    </footer>
</div>

</body>
</html>
