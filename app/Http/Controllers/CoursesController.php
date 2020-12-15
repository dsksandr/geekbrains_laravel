<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoursesController extends Controller
{
    private $course_list = [
        '1' => [
            'name' => 'Курс "Фонетика"',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est.',
            'img_url' => 'https://via.placeholder.com/400'
        ],
        '2' => [
            'name' => 'Курс "Грамматика"',
            'description' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?',
            'img_url' => 'https://via.placeholder.com/400'
        ],
        '3' => [
            'name' => 'Курс "Лексика"',
            'description' => 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.',
            'img_url' => 'https://via.placeholder.com/400'
        ],
    ];

    public function index() {
        $data = [
            'title' => 'Наши курсы',
            'course_list' => $this->course_list,
        ];

        $html = "<h1>{$data['title']}</h1>";

        $html .= "<section><ul>";

        foreach ($data['course_list'] as $key => $value) {
            $html .= "<li><a href=\"course/{$key}\">{$value['name']}</a></li>";
        }

        $html .= "</ul></section>";

        $html .= "<a href=\"/\">На главную</a>";

        echo $html;
    }

    public function course_item($id) {
        $data = [
            'title' => $this->course_list[$id]['name'],
            'description' => $this->course_list[$id]['description'],
            'img_url' => $this->course_list[$id]['img_url'],
        ];

        $html = "<h1>{$data['title']}</h1>";

        $html .= "<img src=\"{$data['img_url']}\" />";

        $html .= "<p>{$data['description']}</p>";

        $back_url = url()->previous();

        $html .= "<a href=\"{$back_url}\">Назад</a>";

        echo $html;
    }
}
