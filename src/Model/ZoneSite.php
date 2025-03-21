<?php

/*
 * This source file is available under two different licenses:
 *   - GNU General Public License version 3 (GPLv3)
 *   - DACHCOM Commercial License (DCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * @copyright  Copyright (c) DACHCOM.DIGITAL AG (https://www.dachcom-digital.com)
 * @license    GPLv3 and DCL
 */

namespace I18nBundle\Model;

use Pimcore\Model\Site;

class ZoneSite implements ZoneSiteInterface
{
    protected SiteRequestContext $siteRequestContext;
    protected ?Site $pimcoreSite;
    protected int $rootId;
    protected bool $isRootDomain;
    protected bool $isActive;
    protected ?string $locale;
    protected ?string $countryIso;
    protected string $languageIso;
    protected string $hrefLang;
    protected ?string $localeUrlMapping;
    protected string $url;
    protected ?string $homeUrl;
    protected string $rootPath;
    protected string $fullPath;
    protected ?string $type;
    protected array $subSites;

    public function __construct(
        SiteRequestContext $siteRequestContext,
        ?Site $pimcoreSite,
        int $rootId,
        bool $isRootDomain,
        bool $isActive,
        ?string $locale,
        ?string $countryIso,
        string $languageIso,
        string $hrefLang,
        ?string $localeUrlMapping,
        string $url,
        ?string $homeUrl,
        string $rootPath,
        string $fullPath,
        ?string $type,
        array $subSites = []
    ) {
        $this->siteRequestContext = $siteRequestContext;
        $this->rootId = $rootId;
        $this->isRootDomain = $isRootDomain;
        $this->isActive = $isActive;
        $this->locale = $locale;
        $this->countryIso = $countryIso;
        $this->languageIso = $languageIso;
        $this->hrefLang = $hrefLang;
        $this->localeUrlMapping = $localeUrlMapping;
        $this->url = $url;
        $this->homeUrl = $homeUrl;
        $this->rootPath = $rootPath;
        $this->fullPath = $fullPath;
        $this->type = $type;
        $this->subSites = $subSites;
        $this->pimcoreSite = $pimcoreSite;
    }

    public function getSiteRequestContext(): SiteRequestContext
    {
        return $this->siteRequestContext;
    }

    public function getPimcoreSite(): ?Site
    {
        return $this->pimcoreSite;
    }

    public function hasPimcoreSite(): bool
    {
        return $this->pimcoreSite instanceof Site;
    }

    public function getRootId(): int
    {
        return $this->rootId;
    }

    public function isRootDomain(): bool
    {
        return $this->isRootDomain;
    }

    public function isActive(): bool
    {
        return $this->isActive;
    }

    public function getLocale(): ?string
    {
        return $this->locale;
    }

    public function getCountryIso(): ?string
    {
        return $this->countryIso;
    }

    public function getLanguageIso(): string
    {
        return $this->languageIso;
    }

    public function getHrefLang(): string
    {
        return $this->hrefLang;
    }

    public function getLocaleUrlMapping(): ?string
    {
        return $this->localeUrlMapping;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getHomeUrl(): ?string
    {
        return $this->homeUrl;
    }

    public function getRootPath(): string
    {
        return $this->rootPath;
    }

    public function getFullPath(): string
    {
        return $this->fullPath;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function getSubSites(): array
    {
        return $this->subSites;
    }

    public function hasSubSites(): bool
    {
        return count($this->subSites) > 0;
    }
}
