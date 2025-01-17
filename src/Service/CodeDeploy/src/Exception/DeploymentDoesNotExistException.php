<?php

namespace AsyncAws\CodeDeploy\Exception;

use AsyncAws\Core\Exception\Http\ClientException;

/**
 * The deployment with the IAM user or Amazon Web Services account does not exist.
 */
final class DeploymentDoesNotExistException extends ClientException
{
}
