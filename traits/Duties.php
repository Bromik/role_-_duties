<?php

namespace traits;

trait  Duties {

    /**
     * List user duties
     * @return array
     */
    static public function userDuties ()
    {
        return [
            'developer' => [
                'codeWriting' => 'code writing', 'codeTesting' => 'code testing', 'communicationWithManager' => 'communication with manager'
            ],
            'designer' => [
                'draw' => 'draw','communicationWithManager' => 'communication with manager'
            ],
            'manager' => [
                'setTasks' => 'set tasks'
            ],
            'tester' => [
                'codeTesting' => 'code testing', 'setTasks' => 'set tasks', 'communicationWithManager' =>'communication with manager'
            ]
        ];
    }

}
