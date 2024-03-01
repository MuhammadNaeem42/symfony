<?php

namespace App\Controller;

use App\Repository\TodoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class TodoApiController extends AbstractController
{
    /**
     * @Route("/todo/api", name="app_todo_api", methods={"GET"})
     */
    public function index(TodoRepository $todoRepository): JsonResponse
    {
        $todos = $todoRepository->findAll();
        $todoData = [];

        foreach ($todos as $todo) {
            $todoData[] = [
                'id' => $todo->getId(),
                'title' => $todo->getTitle(),
                'done' => $todo->isDone(),
            ];
        }

        return new JsonResponse($todoData);
    }
}

