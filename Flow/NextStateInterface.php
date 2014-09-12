<?php

namespace Lexik\Bundle\WorkflowBundle\Flow;

use Lexik\Bundle\WorkflowBundle\Model\ModelInterface;

/**
 * Next state inerface.
 *
 * @author Cédric Girard <c.girard@lexik.fr>
 */
interface NextStateInterface
{
    const TYPE_STEP    = 'step';
    const TYPE_STEP_OR = 'step_or';
    const TYPE_PROCESS = 'process';

    /**
     * Returns the state name.
     *
     * @return string
     */
    public function getName();

    /**
     * Returns the state type.
     *
     * @return string
     */
    public function getType();

    /**
     * Returns the state target.
     *
     * @param  ModelInterface $model
     *
     * @return Node
     */
    public function getTarget(ModelInterface $model);
}
