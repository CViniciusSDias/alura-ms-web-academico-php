<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('courses')->get()->count() > 0) {
            return;
        }

        $cursos = [
            [
                'titulo' => 'Microsserviços: Padrões de projeto',
                'url' => 'https://cursos.alura.com.br/course/microsservicos-padroes-projeto',
                'icone' => 'https://www.alura.com.br/assets/api/cursos/microsservicos-padroes-projeto.svg',
            ],
            [

                'titulo' => 'Mais sobre microsserviços',
                'url' => 'https://cursos.alura.com.br/course/fundamentos-microsservicos-aprofundando-conceitos',
                'icone' => 'https://www.alura.com.br/assets/api/cursos/fundamentos-microsservicos-aprofundando-conceitos.svg',
            ],
            [

                'titulo' => 'Integração contínua',
                'url' => 'https://cursos.alura.com.br/course/desenvolvimento-software-integracao-continua',
                'icone' => 'https://www.alura.com.br/assets/api/cursos/desenvolvimento-software-integracao-continua.svg',
            ],
            [

                'titulo' => 'Entrega contínua',
                'url' => 'https://cursos.alura.com.br/course/entrega-continua-confiabilidade-qualidade',
                'icone' => 'https://www.alura.com.br/assets/api/cursos/entrega-continua-confiabilidade-qualidade.svg',
            ],
            [

                'titulo' => '12-Factor Apps',
                'url' => 'https://cursos.alura.com.br/course/the-twelve-factor-app',
                'icone' => 'https://www.alura.com.br/assets/api/cursos/the-twelve-factor-app.svg',
            ],
            [

                'titulo' => 'Docker',
                'url' => 'https://cursos.alura.com.br/course/docker-e-docker-compose',
                'icone' => 'https://www.alura.com.br/assets/api/cursos/docker-e-docker-compose.svg',
            ],
            [

                'titulo' => 'Kubernetes',
                'url' => 'https://cursos.alura.com.br/course/kubernetes-pods-services-configmap',
                'icone' => 'https://www.alura.com.br/assets/api/cursos/kubernetes-pods-services-configmap.svg',
            ],
            [

                'titulo' => 'Nginx 1',
                'url' => 'https://cursos.alura.com.br/course/nginx-servidor-web-proxy-reverso-api-gateway',
                'icone' => 'https://www.alura.com.br/assets/api/cursos/nginx-servidor-web-proxy-reverso-api-gateway.svg',
            ],
            [

                'titulo' => 'Nginx 2',
                'url' => 'https://cursos.alura.com.br/course/nginx-parte-2-performance-fastcgi-https',
                'icone' => 'https://www.alura.com.br/assets/api/cursos/nginx-parte-2-performance-fastcgi-https.svg',
            ],
        ];

        foreach ($cursos as $curso) {
            DB::table('courses')->insertOrIgnore($curso);
        }
    }
}
