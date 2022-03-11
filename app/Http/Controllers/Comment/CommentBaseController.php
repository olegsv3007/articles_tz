<?php

namespace App\Http\Controllers\Comment;

use App\Http\Controllers\Controller;
use App\Service\CommentService;

class CommentBaseController extends Controller
{
    public function __construct(protected CommentService $commentService) { }
}
