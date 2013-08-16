<?php

namespace Codesleeve\AssetPipeline\Directives;

class RequireTree extends BaseDirective {

	public function process($directory)
	{
		if (strpos($directory, '/') === 0) {
			throw new \InvalidArgumentException('Directory cannot start with a /');
		}

		if (str_replace('..', '', $directory) !== $directory) {
			throw new \InvalidArgumentException('Directory cannot have relative paths like .. in it');
		}

		return $this->getFilesInFolder($directory, $recursive = true);
	}

}