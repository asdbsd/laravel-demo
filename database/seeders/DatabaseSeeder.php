<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::truncate();
        // Category::truncate();
        // Post::truncate();


        $user1 = User::factory()->create([
            'name' => 'Dobriyan Petkov'
        ]);

        $user3 = User::factory()->create([
            'name' => 'Elephant Joe'
        ]);

        $user2 = User::factory()->create([
            'name' => 'Stone Cold'
        ]); 

        Post::factory(4)->create([
            'user_id' => $user1->id
        ]);

        Post::factory(6)->create([
            'user_id' => $user3->id
        ]);

        Post::factory(3)->create([
            'user_id' => $user2->id
        ]);

        // $user = User::factory()->create();

        // $personal = Category::create([
        //     'name' => 'Personal',
        //     'slug' => 'personal'
        // ]);

        // $work = Category::create([
        //     'name' => 'Work',
        //     'slug' => 'work'
        // ]);

        // $hobbies = Category::create([
        //     'name' => 'Hobbies',
        //     'slug' => 'hobbies'
        // ]);


        // Post::create([
        //     'title' => 'First Blog Post',
        //     'slug' => 'first-blog-post',
        //     'excerpt' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
        //     'body' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        //     'category_id' => $personal->id,
        //     'user_id' => $user->id
        // ]);

        // Post::create([
        //     'title' => 'Seventh Blog Post',
        //     'slug' => 'seventh-blog-post',
        //     'excerpt' => 'To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it?',
        //     'body' => 'No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?',
        //     'category_id' => $hobbies->id,
        //     'user_id' => $user->id
        // ]);

        // Post::create([
        //     'title' => 'Second Blog Post',
        //     'slug' => 'second-blog-post',
        //     'excerpt' => 'Nam libero tempore, cum soluta nobis est eligendi optio cumque.',
        //     'body' => 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.',
        //     'category_id' => $hobbies->id,
        //     'user_id' => $user->id
        // ]);

        // Post::create([
        //     'title' => 'Third Blog Post',
        //     'slug' => 'third-blog-post',
        //     'excerpt' => 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.',
        //     'body' => 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"',
        //     'category_id' => $personal->id,
        //     'user_id' => $user->id
        // ]);

        // Post::create([
        //     'title' => 'Fourth Blog Post',
        //     'slug' => 'fourth-blog-post',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
        //     'category_id' => $work->id,
        //     'user_id' => $user->id
        // ]);

        // Post::create([
        //     'title' => 'Fifth Blog Post',
        //     'slug' => 'fifth-blog-post',
        //     'excerpt' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem.',
        //     'body' => 'Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?',
        //     'category_id' => $hobbies->id,
        //     'user_id' => $user->id
        // ]);

        // Post::create([
        //     'title' => 'Sixth Blog Post',
        //     'slug' => 'sixth-blog-post',
        //     'excerpt' => 'These cases are perfectly simple and easy to distinguish. In a free hour.',
        //     'body' => 'These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.',
        //     'category_id' => $work->id,
        //     'user_id' => $user->id
        // ]);
        
    }
}
