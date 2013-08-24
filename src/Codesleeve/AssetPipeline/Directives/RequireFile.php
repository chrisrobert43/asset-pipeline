<?php

namespace Codesleeve\AssetPipeline\Directives;

class RequireFile extends BaseDirective {

	public function process($filename)
	{
		$file = $this->getRelativePath($filename, $this->getIncludePaths());
		return array($file);
	}

}