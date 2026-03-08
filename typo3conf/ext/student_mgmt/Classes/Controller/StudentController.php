<?php
namespace Net2Typo\StudentMgmt\Controller;

use Psr\Http\Message\ResponseInterface;
use Net2Typo\StudentMgmt\Domain\Repository\StudentRepository;
use Net2Typo\StudentMgmt\Domain\Model\Student;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class StudentController extends ActionController
{
    protected StudentRepository $studentRepository;

    public function __construct(StudentRepository $studentRepository)
    {
        $this->studentRepository = $studentRepository;
    }

    public function listAction(): ResponseInterface
    {
        $students = $this->studentRepository->findAll();
        $this->view->assign('students', $students);
        return $this->htmlResponse();
    }

    public function newAction(): ResponseInterface
    {
        $this->view->assign('student', new Student());
        return $this->htmlResponse();
    }

    public function createAction(Student $student): ResponseInterface
    {
        $this->studentRepository->add($student);
        return $this->redirect('list');
    }

    public function editAction(Student $student): ResponseInterface
    {
        $this->view->assign('student', $student);
        return $this->htmlResponse();
    }

    public function updateAction(Student $student): ResponseInterface
    {
        $this->studentRepository->update($student);
        return $this->redirect('list');
    }
    
    public function deleteAction(\Net2Typo\StudentMgmt\Domain\Model\Student $student): \Psr\Http\Message\ResponseInterface
    {
        $this->studentRepository->remove($student);
        return $this->redirect('list');
    }
}
