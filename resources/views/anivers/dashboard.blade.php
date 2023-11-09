<h2>Aniversariante Dashboard</h2>

<h3>Status das reservas: </h3>

<a href="{{ route('inforeserva') }} " class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Reserva 1: Aprovada</a><br><br>

<a href="{{ route('cancelar') }}">Reserva 2: Em espera</a><br><br>

<a href="{{ route('pesquisadesatisfacao') }}">Reserva 3: Concluida</a><br><br>
<h3>Solicitar nova reserva</h3>
<a href="{{route('solicitar_reserva')}}">Solicitar</a> <br><br>

<form method="POST" action="{{ route('logout') }}">
    @csrf
    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                             this.closest('form').submit();" >
    Logout</a>

</form>