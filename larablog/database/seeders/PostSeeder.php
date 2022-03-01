<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            [
                'categories' => ['Methodologie', 'Javascript'],
                'post' => new Post([
                    'title' => 'Retour d\'expérience | Projet authentification avec Vue.js + Node.js',
                    'short' => 'Un court billet pour garder une trace des différentes étapes de ce
                    projet.',
                    'content_path' => '20211123_retour_exp_projet_auth_vue_node',
                    'read_duration' => 5
                ])
            ],
            [
                'categories' => ['Methodologie', 'Javascript'],
                'post' => new Post([
                    'title' => 'Vérification de l’email à la création d’un compte – Reset password – Node.js',
                    'short' => 'Dans cet article je détaille comment mettre en place la vérification de la validité d’un email lors de la création d’un compte utilisateur. Notamment l’utilisation de json web token et les routes à utiliser / créer côté serveur.\lnSur le même principe, je détaille également le flow du reset du mot de passe de l’utilisateur. En plus d’être à durée limitée le lien fourni sera à usage unique.',
                    'content_path' => '20211129_email_check_reset_password',
                    'read_duration' => 10
                ])
            ], [
                'categories' => ['CSS-SCSS', 'Javascript'],
                'post' => new Post([
                    'title' => 'React styled-components et Next.js',
                    'short' => 'Styled-components, comme son nom l’indique, fournit directement des composants react avec des styles associés. Dans un fichier javascript, le css est lié à un composant créé grâce à la fonction fournie par styled-components et aux littéraux de gabarit (les backticks « ). C’est ce composant qui est ensuite exporté pour être affiché.',
                    'content_path' => '20211230_styled_components_react',
                    'read_duration' => 15
                ])
            ]
        ];

        foreach ($posts as $post) {

            $post['post']->save();
            foreach ($post['categories'] as $category) {
                $cat = Category::where('name', $category)->first();
                $post['post']->categories()->attach($cat);
            }
        }
    }
}
