<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl dark:bg-gray-800 sm:rounded-lg">
                {{--  <x-welcome />  --}}

                <div class="text-white" id="user-container"></div>

                </body>
                <script type="module">
                    Echo.join(`users`)
                        .here((users) => {
                            console.log(users);

                            for (const user of users) {
                                const userDiv = document.createElement('div');
                                const img = document.createElement('img');
                                img.src = user.profile_photo_url;
                                img.classList.add('h-8'); // Agregar la clase Tailwind
                                img.classList.add('w-8'); // Agregar la clase Tailwind
                                img.classList.add('rounded-full'); // Agregar la clase Tailwind
                                const name = document.createElement('p');
                                name.textContent = `Nombre: ${user.name}`;
                                const email = document.createElement('p');
                                email.textContent = `Correo electrónico: ${user.email}`;
                                userDiv.appendChild(img);
                                userDiv.appendChild(name);
                                userDiv.appendChild(email);
                                document.getElementById('user-container').appendChild(userDiv);
                            }



                            for (const user of users) {
                                console.log("ID:", user.id);
                                console.log("Nombre:", user.name);
                                console.log("Correo electrónico:", user.email);
                                console.log("img path:", user.profile_photo_url);
                                console.log("ID del equipo actual:", user.current_team_id);
                                console.log("------------------------"); // Separator between users


                            }



                        })
                        .joining((user) => {
                            console.log(user.name);
                        })
                        .leaving((user) => {
                            console.log(user.name);
                        })
                        .error((error) => {
                            console.error(error);
                        });
                </script>

            </div>
        </div>
    </div>
</x-app-layout>
