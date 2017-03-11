Здравствуйте {{ $user->username }}!

Участник {{ $blueprint->post->user->username }} оставил сообщение в теме: {{ $blueprint->post->discussion->title }}

Просмотреть больше информации вы можете, перейдя по следующей ссылке:
{{ app()->url() }}/d/{{ $blueprint->post->discussion_id }}/{{ $blueprint->post->number }}

---

{{ strip_tags($blueprint->post->contentHtml) }}

---

С уважением, служба форума. 
