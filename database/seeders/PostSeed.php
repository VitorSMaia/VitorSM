<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\PostParagraphs;

class PostSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $post = new Post;
        
        $postid = $post->query()->create([
            'title' => 'Desenvolvendo Aplicações Web Progressivas: O Futuro da Web',
            'image' => 'https://d1unuvan7ts7ur.cloudfront.net/0x769/a014fb64-2cf2-4382-bb75-77d808d5c1f4/01GWFBSDB2J7PXNM0X4S930JND'
        ]);


        $paragraphs = [
            [
                'content' => '<div class="">
                <div class="flex justify-center pb-5">
                  <img class="h-60 w-[700px] object-cover shadow-lg rounded-lg" src="https://d1unuvan7ts7ur.cloudfront.net/0x769/a014fb64-2cf2-4382-bb75-77d808d5c1f4/01GWFC7Q6VZSNDKVFMY13M86M3" alt="">
                </div>
                <p class="text-2xl">Desenvolvendo Aplicações Web Progressivas: O Futuro da Web</p>
                <p class="p-5 bg-blue-300 bg-opacity-25 rounded-lg">
                  Com o avanço constante da tecnologia, a web tem se transformado em uma plataforma mais poderosa e versátil
                  para o desenvolvimento de aplicativos. Com o surgimento das aplicações web progressivas (PWA), a experiência
                  do usuário se aproxima cada vez mais da de um aplicativo nativo, com a vantagem de ser executado diretamente
                  no navegador web.
                </p>
              </div>'
            ],
            [
                'content' => '<div>
                <p class="text-2xl">O que é uma Aplicação Web Progressiva?</p>
                <p class="p-5 bg-blue-300 bg-opacity-25 rounded-lg">
                  Uma aplicação web progressiva (PWA) é uma aplicação web que se comporta como um aplicativo nativo, podendo ser instalada no dispositivo do usuário, receber notificações push e ser executada offline. Isso é possível graças ao uso de tecnologias da web, como o Service Worker, que permite armazenar em cache recursos da aplicação e acessá-los mesmo sem conexão à internet.
                </p>
              </div>'
            ],
            [
                'content' => '<div class="flex justify-center pb-5">
                <img class="h-60 w-[700px]  object-cover  shadow-lg rounded-lg" src="https://d1unuvan7ts7ur.cloudfront.net/0x769/a014fb64-2cf2-4382-bb75-77d808d5c1f4/01GWFASXFYJ9CNHAY8DBZJA6Z8" alt="">
              </div>'
            ],
            [
                'content' => '<div class="flex justify-between items-end gap-x-5">
                <div>
                  <p class="text-2xl">Como Desenvolver uma Aplicação Web Progressiva?</p>
          
                  <p class="p-5 bg-blue-300 bg-opacity-25 rounded-lg">
                    Para desenvolver uma aplicação web progressiva, é necessário seguir alguns princípios fundamentais, como fornecer uma experiência de usuário rápida e
                    responsiva, otimizar o desempenho da aplicação e torná-la acessível em todos os dispositivos. Além disso, é importante utilizar recursos como a API de
                    notificações push e o Service Worker para melhorar a experiência do usuário.
                  </p>
                </div>
                <div>
                  <p class="text-2xl">Exemplos de Aplicações Web Progressivas</p>
          
                  <p class="p-5 bg-blue-300 bg-opacity-25 rounded-lg">
                    Algumas das aplicações web progressivas mais conhecidas incluem o Twitter Lite, que oferece uma versão mais leve e rápida do aplicativo para dispositivos
                    móveis; o Flipkart, um aplicativo de comércio eletrônico que pode ser instalado no dispositivo do usuário; e o Pinterest, que utiliza recursos de cache e
                    notificações para fornecer uma experiência mais rápida e responsiva.
                  </p>
                </div>
              </div>'
            ],
            [
                'content' => '<div>
                <p class="text-2xl">Benefícios das Aplicações Web Progressivas</p>
          
                <p class="p-5 bg-blue-300 bg-opacity-25 rounded-lg">
                  Uma das principais vantagens das aplicações web progressivas é que elas oferecem uma experiência do usuário mais próxima da de um aplicativo nativo,
                  sem a necessidade de instalação. Isso torna a aplicação mais acessível e fácil de ser utilizada, especialmente em dispositivos móveis. Além disso, o
                  uso de tecnologias da web permite que as aplicações sejam atualizadas automaticamente, sem a necessidade de uma nova instalação.
                </p>
              </div>'
            ],
            [
                'content' => '<div>
                <p class="text-2xl">O Futuro das Aplicações Web Progressivas</p>
          
                <p class="p-5 bg-blue-300 bg-opacity-25 rounded-lg">
                  Com o surgimento das aplicações web progressivas, a web se tornou uma plataforma mais poderosa e versátil para o desenvolvimento de aplicativos.
                  A tendência é que cada vez mais empresas e desenvolvedores adotem essa abordagem, oferecendo aos usuários uma experiência mais rápida, acessível
                  e responsiva, sem a necessidade de instalação de aplicativos nativos. O futuro das aplicações web progressivas é promissor e o seu potencial é enorme
                  para o desenvolvimento de aplicativos inovadores e de alta qualidade.
                </p>
              </div>'
            ],
        ];

        $postP = new PostParagraphs;

        foreach($paragraphs as $key => $item) {
            $postP->query()->create([
                'post_id' => $postid['id'],
                'content' => $item['content'],
                'order' => $key++,
            ]);
        }

        dd($postid);

    }
}
