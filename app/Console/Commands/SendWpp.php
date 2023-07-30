<?php

namespace App\Console\Commands;

use Aloha\Twilio\Twilio;
use Carbon\Carbon;
use GuzzleHttp\RequestOptions;
use http\Header;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

//use Aloha\Twilio\TwilioInterface;

class SendWpp extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $good_morning = [
            'Bom dia, vó! Que sua manhã seja repleta de risadas, doces e boas novidades.',
            'Bom dia, vovó amada! Eu te amo e estou com o coração cheio de saudades.',
            'Bom dia, minha avó tão querida e amada! Queria poder estar ao seu lado agora, mas estou mandando mil beijos virtuais!',
            'Bom dia, vovó! Todos os dias eu tenho mais certeza de que você é a melhor avó do mundo! Eu te amo muito e com tudo o que sou.',
            'ó, acordei morrendo de saudade das suas comidas deliciosas. Bom dia, eu te amo!',
            'Bom dia, vó! Queria que a vida fosse tão doce quanto as guloseimas que você faz.',
            'Eu te amo, vó! Você está sempre nos meus pensamentos. Bom dia!',
            'Bom dia, vovó! O amor que sinto por você se multiplica todos os dias e horas. Sinto sua falta!',
            'Vó, não há ninguém no mundo que faça uma comida tão boa quanto a sua. Bom dia!',
            'Bom dia, vó, te amo muito! Logo estarei aí te enchendo de muitos beijos e abraços.',
        ];

        $good_night = [
            'Boa noite, avó. Eu te amo!',
            'Boa noite, vovó querida!',
            'Que a luz das estrelas iluminem os seus sonhos. Boa noite, vó!'
        ];

         $nowH = now()->format('H');
         $now = now()->format('d/m/Y H:i:s');

        if($nowH < 12) {
            $key = array_rand($good_morning, 1);
            $message = $good_morning[$key];
        }else {
            $key = array_rand($good_night, 1);
            $message = $good_night[$key];
        }


        $url = 'https://wpp-app-ca19bd230169.herokuapp.com/zdg-message';

        $client = new \GuzzleHttp\Client();
        $response = $client->post($url, [
            RequestOptions::FORM_PARAMS => ['number' => 5585999747117, 'message' => $message],
        ]);
        
        Log::info("Menssagem enviada $now" );
    }
}
