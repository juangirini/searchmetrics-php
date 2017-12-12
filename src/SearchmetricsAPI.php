<?php


namespace SearchmetricsPHP;


/**
 * Searchmetrics API SDK Class
 * 
 * @author generated
 * @author Juan Girini <juangirini@gmail.com>
 * @author Yohann Nizon <ynizon@gmail.com>
 * @copyright Searchmetrics
 * @version 2017-12-11 11:10
 */
class SearchmetricsAPI extends SearchmetricsBase
{
	/**
	 * API Version
	 */
	protected $api_version = 'v3';

	/**
	 * Searchmetrics SEO Worldwide Visibility for a given URL.
	 *
	 * @param $url URL for which the SEO Visibility is determined. The URL can be either an domain, a subdomain or a directory. For a domain, subdomain or directory all belonging sub-pages are included in the calculation.
	 */
	public function ResearchOrganicGetValueSeoVisibilityWorld($url)
	{
		return $this->run('ResearchOrganicGetValueSeoVisibilityWorld', get_defined_vars(), 'GET');
	}

	/**
	 * Searchmetrics SEO Visibility for a given URL in a given country.
	 *
	 * @param $countrycode A two letter country as specified in ISO 3166-1
	 * @param $url URL for which the SEO Visibility is determined. The Visibility can be queried for a domain, a subdomain or a directory. For a domain, subdomain or directory all belonging sub-pages are included in the calculation.
	 */
	public function ResearchOrganicGetValueSeoVisibility($countrycode, $url)
	{
		return $this->run('ResearchOrganicGetValueSeoVisibility', get_defined_vars(), 'GET');
	}

	/**
	 * Keyword rankings for a given domain in organic search results.
	 *
	 * @param $countrycode A two letter country code as specified in ISO 3166-1
	 * @param $url Either a domain or subdomain
	 * @param $limit = "10" Limit for the number of result rows Permitted values are 10, 25, 50, 100, 250 Default is 10
	 * @param $offset = "0" Offset for result set Must be a multiple of allowed values for the parameter "limit" Default is 0
	 */
	public function ResearchOrganicGetListRankingsDomain($countrycode, $url, $limit = "10", $offset = "0")
	{
		return $this->run('ResearchOrganicGetListRankingsDomain', get_defined_vars(), 'GET');
	}

	
	/**
	 * Historic rankings for a given keyword in organic search results. (longtail)
	 *
	 * @param $countrycode A two letter country code as specified in ISO 3166-1
	 * @param $keyword 
	 * @param $limit = "10" Limit for the number of result rows Permitted values are 10, 25, 50, 100, 250 Default is 10
	 * @param $offset = "0" Offset for result set Must be a multiple of allowed values for the parameter "limit" Default is 0
	 */
	public function ResearchOrganicGetListRankingsKeywordLongtail($countrycode, $keyword, $limit = "10", $offset = "0")
	{
		return $this->run('ResearchOrganicGetListRankingsKeywordLongtail', get_defined_vars(), 'GET');
	}
	
	/**
	 * Searchmetrics SEO Visibility per country for a given URL.
	 *
	 * @param $url Domain for which the Paid Visibility is queried.
	 */
	public function ResearchOrganicGetListSeoVisibilityCountry($url)
	{
		return $this->run('ResearchOrganicGetListSeoVisibilityCountry', get_defined_vars(), 'GET');
	}
	
	/**
	 * Searchmetrics SEO Visibility for Desktop and Mobile for a given URL in a given country in a given timeframe.
	 *
	 * @param $countrycode A two letter country code as specified in ISO 3166-1
	 * @param $date_from Start date from which the Paid Visibility should be queried
	 * @param $date_to End date up to which the Paid Visibility should be queried
	 * @param $url Domain for which the Paid Visibility is queried.
	 */
	public function ResearchOrganicGetListSeoVisibilityMobileHistory($countrycode, $date_from, $date_to, $url)
	{
		return $this->run('ResearchOrganicGetListSeoVisibilityMobileHistory', get_defined_vars(), 'GET');
	}
	
	/**
	 * Ranking distribution of identified keywords in a given country.
	 *
	 * @param $countrycode A two letter country code as specified in ISO 3166-1
	 * @param $url URL for which the SEO Visibility is determined. The Visibility can be queried for a domain, a subdomain or a directory. For a domain, subdomain or directory all belonging sub-pages are included in the calculation.
	 */
	public function ResearchOrganicGetListSerpSpread($countrycode, $url)
	{
		return $this->run('ResearchOrganicGetListSerpSpread', get_defined_vars(), 'GET');
	}

	/**
	 * List of keywords that contain a selected keyword.
	 *
	 * @param $countrycode A two letter country code as specified in ISO 3166-1
	 * @param $keyword keyword that is used to find similar keywords
	 * @param $limit = "10" Limit for the number of result rows Permitted values are 10, 25, 50, 100, 250 Default is 25
	 * @param $offset = "0" Offset for result set Must be a multiple of allowed values for the parameter "limit" Default is 0
	 */
	public function ResearchKeywordsGetListSimilarKeywords($countrycode, $keyword, $limit = "10", $offset = "0")
	{
		return $this->run('ResearchKeywordsGetListSimilarKeywords', get_defined_vars(), 'GET');
	}

	/**
	 * Searchmetrics Paid Visibility for a given URL and a given country.
	 *
	 * @param $countrycode A two letter country code as specified in ISO 3166-1
	 * @param $url Domain for which the Paid Visibility is queried.
	 */
	public function ResearchPaidGetValuePaidVisibility($countrycode, $url)
	{
		return $this->run('ResearchPaidGetValuePaidVisibility', get_defined_vars(), 'GET');
	}

	/**
	 * Number of backlinks for a given domain, subdomain or URL.
	 *
	 * @param $url Can be either a domain, a subdomain or a page.   For a domain or a subdomain all backlinks are counted that refer to any page of the domain or subdomain.   For any other URL only backlinks are counted that point directly to the specified page.
	 */
	public function ResearchLinksGetCountBacklinks($url)
	{
		return $this->run('ResearchLinksGetCountBacklinks', get_defined_vars(), 'GET');
	}

	/**
	 * Number of referring domains for a given URL (domain popularity).
	 *
	 * @param $url Either a domain, a subdomain or a page  For a domain or a subdomain all domains are counted that refer to any page of the domain or subdomain.  For any other URL only domains are counted that point directly to the page with this specific URL.
	 */
	public function ResearchLinksGetCountReferringDomains($url)
	{
		return $this->run('ResearchLinksGetCountReferringDomains', get_defined_vars(), 'GET');
	}

	/**
	 * Collection of Paid Search KPIs: paid traffic, ad budget, clicks per day, average CPC, Paid Rank
	 *
	 * @param $countrycode A two letter country code as specified in ISO 3166-1
	 * @param $url Domain for which the Google AdWords Budget is estimated.
	 * @param $currency = "" Currency code as specified in ISO 4217. Default is "EUR".
	 */
	public function ResearchPaidGetValuePaidKpis($countrycode, $url, $currency = "")
	{
		return $this->run('ResearchPaidGetValuePaidKpis', get_defined_vars(), 'GET');
	}

	/**
	 * Estimated paid value of organic search traffic.
	 *
	 * @param $countrycode Country code as specified in ISO 3166-1
	 * @param $url The domain or subdomain for which the traffic value is estimated.
	 * @param $currency = "" Currency code as specified in ISO 4217. Default is "EUR".
	 */
	public function ResearchOrganicGetValueTrafficValue($countrycode, $url, $currency = "")
	{
		return $this->run('ResearchOrganicGetValueTrafficValue', get_defined_vars(), 'GET');
	}

	/**
	 * Number of paid keywords for a domain in a given country.
	 *
	 * @param $countrycode A two letter country code as specified in ISO 3166-1
	 * @param $url Domain for which the number of paid keywords is determined.
	 */
	public function ResearchPaidGetCountDomainKeyword($countrycode, $url)
	{
		return $this->run('ResearchPaidGetCountDomainKeyword', get_defined_vars(), 'GET');
	}

	/**
	 * Number of organic keywords for a given domain with filter options.
	 *
	 * @param $countrycode A two letter country code as specified in ISO 3166-1
	 * @param $url Either a domain or a subdomain
	 * @param $year_month Date
	 * @param $position_from = "" Filter: Lowest ranking of keywords that should be considered in the count. E.g. if you want to count all keywords starting from the position 4 (meaning 4,5,6 etc.) this parameter has to be set to "4".
	 * @param $position_to = "" Filter: Highest ranking of keywords that should be considered in the count.  E.g. if you want to count all keywords up to position 3 ( resulting in all keywords with a SERP of 1, 2 or 3) this parameter has to be set to "3".
	 */
	public function ResearchOrganicGetCountDomainKeywordFilter($countrycode, $url, $year_month, $position_from = "", $position_to = "")
	{
		return $this->run('ResearchOrganicGetCountDomainKeywordFilter', get_defined_vars(), 'GET');
	}

	/**
	 * Rankings for a given keyword in organic search results.
	 *
	 * @param $countrycode A two letter country code as specified in ISO 3166-1
	 * @param $keyword Keyword for which the rankings are determined
	 * @param $limit = "" Limit for the number of result rows Permitted values are 10, 25, 50, 100, 250 Default is 10
	 * @param $offset = "" Offset for result set Must be a multiple of allowed values for the parameter "limit" Default is 0
	 */
	public function ResearchOrganicGetListRankingsKeyword($countrycode, $keyword, $limit = "", $offset = "")
	{
		return $this->run('ResearchOrganicGetListRankingsKeyword', get_defined_vars(), 'GET');
	}

	/**
	 * Top100 Organic Visibility winners in a given country
	 *
	 * @param $countrycode A two letter country code as specified in ISO 3166-1
	 */
	public function ResearchOrganicGetListSeoVisibilityTop100Winners($countrycode)
	{
		return $this->run('ResearchOrganicGetListSeoVisibilityTop100Winners', get_defined_vars(), 'GET');
	}

	/**
	 * Top100 Searchmetrics Organic Visibility losers in a given country
	 *
	 * @param $countrycode A two letter country code as specified in ISO 3166-1
	 */
	public function ResearchOrganicGetListSeoVisibilityTop100Losers($countrycode)
	{
		return $this->run('ResearchOrganicGetListSeoVisibilityTop100Losers', get_defined_vars(), 'GET');
	}

	/**
	 * Backlinks for a given URL
	 *
	 * @param $url Either a domain, a subdomain or an URL  For a domain or a subdomain all results are counted that refer to any page of the domain or subdomain. For any other URL only results are counted that point directly to the page with this specific URL.
	 * @param $limit = "" Limit for the number of result rows Permitted values are 10, 25, 50, 100, 250 Default is 10
	 * @param $offset = "" Offset for result set Must be a multiple of allowed values for the parameter "limit" Default is 0
	 */
	public function ResearchLinksGetListBacklinks($url, $limit = "", $offset = "")
	{
		return $this->run('ResearchLinksGetListBacklinks', get_defined_vars(), 'GET');
	}

	/**
	 * Keyword rankings for a given domain in universal search results.
	 *
	 * @param $countrycode A two letter country code as specified in ISO 3166-1
	 * @param $url Either a domain, a subdomain or a directory
	 * @param $limit = "" Limit for the number of result rows Permitted values are 10, 25, 50, 100, 250 Default is 10
	 * @param $offset = "" Offset for result set Must be a multiple of allowed values for the parameter "limit" Default is 0
	 */
	public function ResearchUniversalGetListRankingsDomain($countrycode, $url, $limit = "", $offset = "")
	{
		return $this->run('ResearchUniversalGetListRankingsDomain', get_defined_vars(), 'GET');
	}

	/**
	 * SEO Visibility rank of the domain (SEORank)
	 *
	 * @param $countrycode A two letter country code as specified in ISO 3166-1
	 * @param $url Domain
	 */
	public function ResearchOrganicGetValueSeoRank($countrycode, $url)
	{
		return $this->run('ResearchOrganicGetValueSeoRank', get_defined_vars(), 'GET');
	}

	/**
	 * Competitor domains in the organic search
	 *
	 * @param $countrycode A two letter country code as specified in ISO 3166-1
	 * @param $url Either a domain or subdomain
	 * @param $currency = "" Currency code as specified in ISO 4217. Default is "EUR".
	 * @param $limit = "" Limit for the number of result rows Permitted values are 10, 25, 50, 100, 250 Default is 10.
	 * @param $offset = "" Offset for result set Must be a multiple of allowed values for the parameter "limit" Default is 0.
	 */
	public function ResearchOrganicGetListCompetitors($countrycode, $url, $currency = "", $limit = "", $offset = "")
	{
		return $this->run('ResearchOrganicGetListCompetitors', get_defined_vars(), 'GET');
	}

	/**
	 * Searchmetrics Paid Visibility rank of the domain (PaidRank)
	 *
	 * @param $countrycode A two letter country code as specified in ISO 3166-1
	 * @param $url domain
	 */
	public function ResearchPaidGetValuePaidRank($countrycode, $url)
	{
		return $this->run('ResearchPaidGetValuePaidRank', get_defined_vars(), 'GET');
	}

	/**
	 * Number of referring IPs for a given URL (IP popularity).
	 *
	 * @param $url Either a domain, a subdomain or an URL For a domain or a subdomain all results are counted that refer to any page of the domain or subdomain. For any other URL only results are counted that point directly to the page with this specific URL.
	 */
	public function ResearchLinksGetCountReferringIps($url)
	{
		return $this->run('ResearchLinksGetCountReferringIps', get_defined_vars(), 'GET');
	}

	/**
	 * Searchmetrics Page Strength (SPS) for a given page.
	 *
	 * @param $url URL of a page
	 */
	public function ResearchLinksGetValuePageStrength($url)
	{
		return $this->run('ResearchLinksGetValuePageStrength', get_defined_vars(), 'GET');
	}

	/**
	 * Historic keyword rankings for a given domain in organic search results.
	 *
	 * @param $countrycode A two letter country code as specified in ISO 3166-1
	 * @param $date Date
	 * @param $url Either a domain or subdomain
	 * @param $currency = "" Currency code as specified in ISO 4217. Default is "EUR".
	 * @param $limit = "" Limit for the number of result rows Permitted values are 10, 25, 50, 100, 250 Default is 10
	 * @param $offset = "" Offset for result set Must be a multiple of allowed values for the parameter "limit" Default is 0
	 */
	public function ResearchOrganicGetListRankingsDomainHistoric($countrycode, $date, $url, $currency = "", $limit = "", $offset = "")
	{
		return $this->run('ResearchOrganicGetListRankingsDomainHistoric', get_defined_vars(), 'GET');
	}

	/**
	 * Searchmetrics Paid Visibility for a given URL and a given country in a given timeframe.
	 *
	 * @param $countrycode A two letter country code as specified in ISO 3166-1
	 * @param $date_from Start date from which the Paid Visibility should be queried
	 * @param $date_to End date up to which the Paid Visibility should be queried
	 * @param $url Domain for which the Paid Visibility is queried.
	 */
	public function ResearchPaidGetListPaidVisibilityHistoric($countrycode, $date_from, $date_to, $url)
	{
		return $this->run('ResearchPaidGetListPaidVisibilityHistoric', get_defined_vars(), 'GET');
	}

	/**
	 * Historic keyword rankings for a given domain in paid search results.
	 *
	 * @param $countrycode A two letter country code as specified in ISO 3166-1
	 * @param $date Date
	 * @param $url Either a domain or subdomain
	 * @param $currency = "" Currency code as specified in ISO 4217. Default is "EUR".
	 * @param $limit = "" Limit for the number of result rows Permitted values are 10, 25, 50, 100, 250 Default is 10
	 * @param $offset = "" Offset for result set Must be a multiple of allowed values for the parameter "limit" Default is 0
	 */
	public function ResearchPaidGetListRankingsDomainHistoric($countrycode, $date, $url)
	{
		return $this->run('ResearchPaidGetListRankingsDomainHistoric', get_defined_vars(), 'GET');
	}
	
	/**
	 * Historic rankings for a given keyword in paid search results.
	 *
	 * @param $countrycode A two letter country code as specified in ISO 3166-1
	 * @param $date Date Format: YYYYMMDD
	 * @param $keyword Keyword for which the rankings are determined
	 * @param $limit = "" Limit for the number of result rows Permitted values are 10, 25, 50, 100, 250 Default is 10
	 * @param $offset = "" Offset for result set Must be a multiple of allowed values for the parameter "limit" Default is 0
	 */
	public function ResearchPaidGetListRankingsKeywordHistoric($countrycode, $date, $keyword, $limit = "", $offset = "")
	{
		return $this->run('ResearchPaidGetListRankingsKeywordHistoric', get_defined_vars(), 'GET');
	}
	
	/**
	 * Searchmetrics SEO Visibility for a given URL in a given country in a given timeframe.
	 *
	 * @param $countrycode A two letter country code as specified in ISO 3166-1
	 * @param $date_from Start date from which the SEO Visibility should be queried
	 * @param $date_to End date to which the SEO Visibility should be queried
	 * @param $url Domain for which the SEO Visibility is queried
	 */
	public function ResearchOrganicGetListSeoVisibilityHistoric($countrycode, $date_from, $date_to, $url)
	{
		return $this->run('ResearchOrganicGetListSeoVisibilityHistoric', get_defined_vars(), 'GET');
	}

	/**
	 * Keyword rankings for a given domain in organic search results with filter options.
	 *
	 * @param $countrycode A two letter country code as specified in ISO 3166-1
	 * @param $url Either a domain or a subdomain
	 * @param $currency = "" Currency code as specified in ISO 4217. Default is "EUR".
	 * @param $limit = "" Limit for the number of result rows Permitted values are 10, 25, 50, 100, 250
	 * @param $offset = "" Offset for result set Must be a multiple of allowed values for the parameter "limit"
	 * @param $position_from = "" Filter: Lowest ranking of keywords that should be returned. E.g. if you want all keywords starting from the position 4 (meaning 4,5,6 etc.) this parameter has to be set to "4".
	 * @param $position_to = "" Filter: Highest ranking of keywords that should be returned. E.g. if you want all keywords up to position 3 ( resulting in all keywords with a SERP of 1, 2 or 3) this parameter has to be set to "3".
	 * @param $search_volume_monthly_from = "" Filter: Lowest monthly search volume in Google for returned keywords. E.g. if you want all keywords with a minimum estimated search volume of 300  this parameter has to be set to "300".
	 * @param $search_volume_monthly_to = "" Filter: Highest estimated monthly search volume for returned keywords. E.g. if you want all keywords with a maximum estimated monthly search volume of 1000 this parameter has to be set to "1000".
	 * @param $traffic_monthly_from = "" Filter: Lowest estimated traffic for returned keywords. E.g. if you want all keywords with a minimum estimated traffic of 300 visitors this parameter has to be set to "300".
	 * @param $traffic_monthly_to = "" Filter: Highest estimated traffic for returned keywords. E.g. if you want all keywords with a maximum estimated traffic of 1000 visitors this parameter has to be set to "1000".
	 */
	public function ResearchOrganicGetListRankingsDomainFilter($countrycode, $url, $currency = "", $limit = "", $offset = "", $position_from = "", $position_to = "", $search_volume_monthly_from = "", $search_volume_monthly_to = "", $traffic_monthly_from = "", $traffic_monthly_to = "")
	{
		return $this->run('ResearchOrganicGetListRankingsDomainFilter', get_defined_vars(), 'GET');
	}

	/**
	 * Most frequently used link anchor texts for a given URL.
	 *
	 * @param $url Either a domain, a subdomain or an URL  For a domain or a subdomain all results are counted that refer to any page of the domain or subdomain. For any other URL only results are counted that point directly to the page with this specific URL.
	 * @param $limit = "" Limit for the number of returned link texts Permitted values are 10, 25, 50, 100, 250 Default is 10
	 * @param $offset = "" Offset for result set Must be a multiple of allowed values for the parameter "limit" Default is 0
	 */
	public function ResearchLinksGetListLinktext($url, $limit = "", $offset = "")
	{
		return $this->run('ResearchLinksGetListLinktext', get_defined_vars(), 'GET');
	}

	/**
	 * List of pages of a given URL with links from external pages
	 *
	 * @param $url Either a domain, a subdomain or an URL  For a domain or a subdomain all results are counted that refer to any page of the domain or subdomain. For any other URL only results are counted that point directly to the page with this specific URL.
	 * @param $limit = "" Limit for the number of returned link texts Permitted values are 10, 25, 50, 100, 250 Default is 10
	 * @param $offset = "" Offset for result set Must be a multiple of allowed values for the parameter "limit" Default is 0
	 */
	public function ResearchLinksGetListLinkedPages($url, $limit = "", $offset = "")
	{
		return $this->run('ResearchLinksGetListLinkedPages', get_defined_vars(), 'GET');
	}

	/**
	 * Number of organic keywords for a given domain.
	 *
	 * @param $countrycode A two letter country code as specified in ISO 3166-1
	 * @param $url Either a domain or a subdomain
	 */
	public function ResearchOrganicGetCountDomainKeyword($countrycode, $url)
	{
		return $this->run('ResearchOrganicGetCountDomainKeyword', get_defined_vars(), 'GET');
	}

	/**
	 * Social Visibility for a given domain
	 *
	 * @param $url Either a domain, subdomain or directory. If this value is entered the call returns the cumulated visibility for all URLs that contain the string entered here.
	 */
	public function ResearchSocialGetValueVisibility($url)
	{
		return $this->run('ResearchSocialGetValueVisibility', get_defined_vars(), 'GET');
	}

	/**
	 * Keywords with the highest absolute gains in organic search traffic for a given domain
	 *
	 * @param $countrycode A two letter country code as specified in ISO 3166-1
	 * @param $url Either a domain or subdomain
	 * @param $limit = "" Limit for the number of result rows Permitted values are 10, 25, 50, 100, 250 Default is 10.
	 * @param $offset = "" Offset for result set Must be a multiple of allowed values for the parameter "limit" Default is 0.
	 */
	public function ResearchKeywordsGetListWinners($countrycode, $url, $limit = "", $offset = "")
	{
		return $this->run('ResearchKeywordsGetListWinners', get_defined_vars(), 'GET');
	}

	/**
	 * Social Spread for a given domain
	 *
	 * @param $url Either a domain, a subdomain or a directory
	 */
	public function ResearchSocialGetValueSocialSpread($url)
	{
		return $this->run('ResearchSocialGetValueSocialSpread', get_defined_vars(), 'GET');
	}

	/**
	 * Social Visibility (Facebook, Twitter etc.) per URL for a given domain
	 *
	 * @param $url Either a domain, a subdomain or a directory
	 * @param $limit = "" Limit for the number of result rows Permitted values are 10, 25, 50, 100, 250 Default is 10.
	 * @param $offset = "" Offset for result set Must be a multiple of allowed values for the parameter "limit" Default is 0.
	 */
	public function ResearchSocialGetListTopUrls($url, $limit = "", $offset = "")
	{
		return $this->run('ResearchSocialGetListTopUrls', get_defined_vars(), 'GET');
	}

	/**
	 * Facebook interaction per URL for a given domain (likes, shares etc.)
	 *
	 * @param $url Either a domain, a subdomain or a directory
	 * @param $limit = "" Limit for the number of result rows Permitted values are 10, 25, 50, 100, 250 Default is 10.
	 * @param $offset = "" Offset for result set Must be a multiple of allowed values for the parameter "limit" Default is 0.
	 */
	public function ResearchSocialGetListFacebook($url, $limit = "", $offset = "")
	{
		return $this->run('ResearchSocialGetListFacebook', get_defined_vars(), 'GET');
	}

	/**
	 * Search volume, CPC etc. for a given keyword
	 *
	 * @param $countrycode A two letter country code as specified in ISO 3166-1
	 * @param $keyword Keyword for which info should be queried.
	 * @param $currency = "" Currency code as specified in ISO 4217. Default is "EUR".
	 */
	public function ResearchKeywordsGetListKeywordinfo($countrycode, $keyword, $currency = "")
	{
		return $this->run('ResearchKeywordsGetListKeywordinfo', get_defined_vars(), 'GET');
	}

	/**
	 * Keywords with the highest absolute losses in organic search traffic for a given domain
	 *
	 * @param $countrycode A two letter country code as specified in ISO 3166-1
	 * @param $url Either a domain or subdomain
	 * @param $limit = "" Limit for the number of result rows Permitted values are 10, 25, 50, 100, 250 Default is 10.
	 * @param $offset = "" Offset for result set Must be a multiple of allowed values for the parameter "limit" Default is 0.
	 */
	public function ResearchKeywordsGetListLosers($countrycode, $url, $limit = "", $offset = "")
	{
		return $this->run('ResearchKeywordsGetListLosers', get_defined_vars(), 'GET');
	}

	/**
	 * Ratio of homepage links and deeplinks for a given domain
	 *
	 * @param $url Either a domain or subdomain
	 */
	public function ResearchLinksGetCountDeeplinkRatio($url)
	{
		return $this->run('ResearchLinksGetCountDeeplinkRatio', get_defined_vars(), 'GET');
	}

	/**
	 * Number of links from news sites pointing to a given URL
	 *
	 * @param $url Either a domain, a subdomain or an URL
	 */
	public function ResearchLinksGetCountNewsDomains($url)
	{
		return $this->run('ResearchLinksGetCountNewsDomains', get_defined_vars(), 'GET');
	}

	/**
	 * Number of links from pages with an .edu or .gov top-level domain
	 *
	 * @param $url Either a domain, a subdomain or an URL
	 */
	public function ResearchLinksGetCountEduGovLinks($url)
	{
		return $this->run('ResearchLinksGetCountEduGovLinks', get_defined_vars(), 'GET');
	}

	/**
	 * Historic keyword rankings for a given domain in universal search results
	 *
	 * @param $countrycode A two letter country code as specified in ISO 3166-1
	 * @param $date Date for which the universal rankings are queried
	 * @param $url Either a domain, a subdomain or a directory
	 * @param $limit = "" Limit for the number of result rows Permitted values are 10, 25, 50, 100, 250 Default is 10
	 * @param $offset = "" Offset for result set Must be a multiple of allowed values for the parameter "limit" Default is 0
	 */
	public function ResearchUniversalGetListRankingsDomainHistoric($countrycode, $date, $url, $limit = "", $offset = "")
	{
		return $this->run('ResearchUniversalGetListRankingsDomainHistoric', get_defined_vars(), 'GET');
	}

	/**
	 * Historic keyword rankings for a given domain in universal search results with filter options.
	 *
	 * @param $countrycode A two letter country code as specified in ISO 3166-1
	 * @param $date Date for which the universal rankings are queried
	 * @param $type Universal search type. Possible values are universal, news, maps, video, images and shopping.
	 * @param $url Either a domain, a subdomain or a directory
	 * @param $currency = "" Currency code as specified in ISO 4217. Default is "EUR".
	 * @param $limit = "" Limit for the number of result rows Permitted values are 10, 25, 50, 100, 250 Default is 10
	 * @param $offset = "" Offset for result set Must be a multiple of allowed values for the parameter "limit" Default is 0
	 * @param $position_from = "" Filter: Lowest ranking of keywords that should be returned. E.g. if you want all keywords starting from the position 4 (meaning 4,5,6 etc.) this parameter has to be set to "4".
	 * @param $position_to = "" Filter: Highest ranking of keywords that should be returned. E.g. if you want all keywords up to position 3 ( resulting in all keywords with a SERP of 1, 2 or 3) this parameter has to be set to "3".
	 * @param $search_volume_monthly_from = "" Filter: Lowest monthly search volume in Google for returned keywords. E.g. if you want all keywords with a minimum estimated search volume of 300 this parameter has to be set to "300".
	 * @param $search_volume_monthly_to = "" Filter: Highest estimated monthly search volume for returned keywords. E.g. if you want all keywords with a maximum estimated monthly search volume of 1000 this parameter has to be set to "1000".
	 * @param $traffic_monthly_from = "" Filter: Lowest estimated traffic for returned keywords. E.g. if you want all keywords with a minimum estimated traffic of 300 visitors this parameter has to be set to "300".
	 * @param $traffic_monthly_to = "" Filter: Highest estimated traffic for returned keywords. E.g. if you want all keywords with a maximum estimated traffic of 1000 visitors this parameter has to be set to "1000".
	 */
	public function ResearchUniversalGetListRankingsDomainFilter($countrycode, $date, $type, $url, $currency = "", $limit = "", $offset = "", $position_from = "", $position_to = "", $search_volume_monthly_from = "", $search_volume_monthly_to = "", $traffic_monthly_from = "", $traffic_monthly_to = "")
	{
		return $this->run('ResearchUniversalGetListRankingsDomainFilter', get_defined_vars(), 'GET');
	}

	/**
	 * Historic rankings for a given keyword in organic search results.
	 *
	 * @param $countrycode A two letter country code as specified in ISO 3166-1
	 * @param $date Date
	 * @param $keyword Keyword for which the rankings are determined
	 * @param $limit = "" Limit for the number of result rows Permitted values are 10, 25, 50, 100, 250 Default is 10
	 * @param $offset = "" Offset for result set Must be a multiple of allowed values for the parameter "limit" Default is 0
	 */
	public function ResearchOrganicGetListRankingsKeywordHistoric($countrycode, $date, $keyword, $limit = "", $offset = "")
	{
		return $this->run('ResearchOrganicGetListRankingsKeywordHistoric', get_defined_vars(), 'GET');
	}

	/**
	 * Number of organic keywords for a given domain with access to historic data.
	 *
	 * @param $countrycode A two letter country code as specified in ISO 3166-1
	 * @param $url Either a domain or a subdomain
	 * @param $year_month Date
	 */
	public function ResearchOrganicGetCountDomainKeywordHistoric($countrycode, $url, $year_month)
	{
		return $this->run('ResearchOrganicGetCountDomainKeywordHistoric', get_defined_vars(), 'GET');
	}

	/**
	 * Keywords with the highest absolute gains in organic search traffic for a given domain with access to historic data
	 *
	 * @param $countrycode A two letter country code as specified in ISO 3166-1
	 * @param $date Date
	 * @param $url Either a domain or subdomain
	 * @param $limit = "" Limit for the number of result rows Permitted values are 10, 25, 50, 100, 250 Default is 10.
	 * @param $offset = "" Offset for result set Must be a multiple of allowed values for the parameter "limit" Default is 0.
	 */
	public function ResearchKeywordsGetListWinnersHistoric($countrycode, $date, $url, $limit = "", $offset = "")
	{
		return $this->run('ResearchKeywordsGetListWinnersHistoric', get_defined_vars(), 'GET');
	}

	/**
	 * Historic search volume, CPC etc. for a given keyword
	 *
	 * @param $countrycode A two letter country code as specified in ISO 3166-1
	 * @param $keyword Keyword for which info should be queried.
	 * @param $year_month Date
	 * @param $currency = "" Currency code as specified in ISO 4217. Default is "EUR".
	 */
	public function ResearchKeywordsGetListKeywordinfoHistoric($countrycode, $keyword, $year_month, $currency = "")
	{
		return $this->run('ResearchKeywordsGetListKeywordinfoHistoric', get_defined_vars(), 'GET');
	}

	/**
	 * Keyword rankings for a project or benchmark domain in organic search results
	 *
	 * @param $project_id ID of the project that should be queried. The ID can be found in the URL when viewing the project in the Searchmetrics Suite.
	 * @param $se_id ID of the search engine that should be queried. A complete list of IDs can be found http://api.searchmetrics.com/api-calls/searchengines. Please make sure your project includes the se_id."
	 * @param $url Domains within the project that should be queried. Several domains must be separated with a comma without blank. Please use the exact name that is used within the project. E.g "www.searchmetrics.com" instead of "searchmetrics.com".
	 * @param $limit = "" Limit for the number of result rows Permitted values are 10, 25, 50, 100, 250
	 * @param $offset = "" Offset for result set Must be a multiple of allowed values for the parameter "limit"
	 * @param $trend_interval = "" Set the time range for the trend comparisons. To compare the actual results with the last results use "last" (default). Other possible values are "weekly" (last week) and monthly (last month).
	 */
	public function ProjectOrganicGetListRankings($project_id, $se_id, $url, $limit = "", $offset = "", $trend_interval = "")
	{
		return $this->run('ProjectOrganicGetListRankings', get_defined_vars(), 'GET');
	}

	/**
	 * Keywords with the highest absolute losses in organic search traffic for a given domain for a given date
	 *
	 * @param $countrycode A two letter country code as specified in ISO 3166-1
	 * @param $date Date from which the SEO Visibility losers should be queried
	 * @param $url Either a domain or subdomain
	 * @param $limit = "" Limit for the number of result rows Permitted values are 10, 25, 50, 100, 250 Default is 10.
	 * @param $offset = "" Offset for result set Must be a multiple of allowed values for the parameter "limit" Default is 0.
	 */
	public function ResearchKeywordsGetListLosersHistoric($countrycode, $date, $url, $limit = "", $offset = "")
	{
		return $this->run('ResearchKeywordsGetListLosersHistoric', get_defined_vars(), 'GET');
	}

	/**
	 * Number of paid keywords for a domain in a given country with filter options.
	 *
	 * @param $countrycode A two letter country code as specified in ISO 3166-1
	 * @param $url Domain for which the number of paid keywords is determined.
	 * @param $year_month month for which the number of paid keywords should be queried
	 * @param $position_from = "" Filter: Lowest ranking of keywords that should be considered in the counting. E.g. if you want to count all keywords starting from the position 4 (meaning 4,5,6 etc.) this parameter has to be set to "4".
	 * @param $position_to = "" Filter: Highest ranking of keywords that should be considered in the counting. E.g. if you want to count all keywords up to position 3 ( resulting in all keywords with a SERP of 1, 2 or 3) this parameter has to be set to "3".
	 */
	public function ResearchPaidGetCountDomainKeywordFilter($countrycode, $url, $year_month, $position_from = "", $position_to = "")
	{
		return $this->run('ResearchPaidGetCountDomainKeywordFilter', get_defined_vars(), 'GET');
	}

	/**
	 * Number of paid keywords for a domain in a given country also for previous months,
	 *
	 * @param $countrycode A two letter country code as specified in ISO 3166-1
	 * @param $url Domain for which the number of paid keywords is determined.
	 * @param $year_month Date
	 */
	public function ResearchPaidGetCountDomainKeywordHistoric($countrycode, $url, $year_month)
	{
		return $this->run('ResearchPaidGetCountDomainKeywordHistoric', get_defined_vars(), 'GET');
	}

	/**
	 * Industry sector classification of a domain
	 *
	 * @param $countrycode A two letter country code as specified in ISO 3166-1
	 * @param $url Either a domain or subdomain
	 */
	public function ResearchOrganicGetListIndustrySpread($countrycode, $url)
	{
		return $this->run('ResearchOrganicGetListIndustrySpread', get_defined_vars(), 'GET');
	}

	/**
	 * Returns the amount of available credits
	 *

	 */
	public function AdminStatusGetValueAvailableCredits()
	{
		return $this->run('AdminStatusGetValueAvailableCredits', get_defined_vars(), 'GET');
	}

	/**
	 * Link Rank for a given domain in a given country
	 *
	 * @param $countrycode A two letter country code as specified in ISO 3166-1
	 * @param $competitors competitors of the given domain, several domains must be separated with a comma without blank.
	 * @param $url Either a domain or subdomain
	 */
	public function ResearchLinksGetValueLinkRank($countrycode, $competitors, $url)
	{
		return $this->run('ResearchLinksGetValueLinkRank', get_defined_vars(), 'GET');
	}

	/**
	 * Social Visibility Rank for a given domain in a given country
	 *
	 * @param $countrycode A two letter country code as specified in ISO 3166-1
	 * @param $url Either a domain or subdomain
	 */
	public function ResearchSocialGetValueSocialRank($countrycode, $url)
	{
		return $this->run('ResearchSocialGetValueSocialRank', get_defined_vars(), 'GET');
	}

	/**
	 * Get a list of projects for the current sublicense.
	 *
	 * @param $limit = "" Limit for the number of result rows Permitted values are 10, 25, 50, 100, 250
	 * @param $offset = "" Offset for result set Must be a multiple of allowed values for the parameter "limit"
	 */
	public function AdminStatusGetListProjects($limit = "", $offset = "")
	{
		return $this->run('AdminStatusGetListProjects', get_defined_vars(), 'GET');
	}
	
	/**
	 * List the project domain and the defined benchmarks for a given project
	 *
	 * @param $project_id  (int)
	 */
	public function AdminStatusGetListProjectDomainsAndBenchmarks($project_id)
	{
		return $this->run('AdminStatusGetListProjectDomainsAndBenchmarks', get_defined_vars(), 'GET');
	}

	/**
	 * Paid keywords with advertisements for a given domain
	 *
	 * @param $countrycode A two letter country code as specified in ISO 3166-1
	 * @param $url Either a domain or subdomain
	 * @param $limit = "" Limit for the number of result rows Permitted values are 10, 25, 50, 100, 250 Default is 10
	 * @param $offset = "" Offset for result set Must be a multiple of allowed values for the parameter "limit" Default is 0
	 */
	public function ResearchPaidGetListKeywords($countrycode, $url, $limit = "", $offset = "")
	{
		return $this->run('ResearchPaidGetListKeywords', get_defined_vars(), 'GET');
	}

	/**
	 * Searchmetrics Visibility for Universal Search for a given URL in a given country.
	 *
	 * @param $countrycode A two letter country code as specified in ISO 3166-1
	 * @param $url Either a domain, a subdomain or a directory
	 */
	public function ResearchUniversalGetListVisibility($countrycode, $url)
	{
		return $this->run('ResearchUniversalGetListVisibility', get_defined_vars(), 'GET');
	}

	/**
	 * Historic keyword rankings for a project or benchmark domain in organic search results
	 *
	 * @param $project_id ID of the project that should be queried. The ID can be found in the URL when viewing the project in the Searchmetrics Suite.
	 * @param $se_id ID of the search engine that should be queried. A complete list of IDs can be found http://api.searchmetrics.com/api-calls/searchengines. Please make sure your project includes the se_id.
	 * @param $url Domains within the project that should be queried. Several domains must be separated with a comma without blank. Please use the exact name that is used within the project. E.g "www.searchmetrics.com" instead of "searchmetrics.com".
	 * @param $date = "" Date for which the rankings should be queried
	 * @param $limit = "" Limit for the number of result rows Permitted values are 10, 25, 50, 100, 250
	 * @param $offset = "" Offset for result set Must be a multiple of allowed values for the parameter "limit"
	 * @param $trend_interval = "" Set the time range for the trend comparisons. To compare the actual results with the last results use "last" (default). Other possible values are "weekly" (last week) and monthly (last month).
	 */
	public function ProjectOrganicGetListRankingsHistoric($project_id, $se_id, $url, $date = "", $limit = "", $offset = "", $trend_interval = "")
	{
		return $this->run('ProjectOrganicGetListRankingsHistoric', get_defined_vars(), 'GET');
	}

	/**
	 * Keyword rankings for a project or benchmark domain in organic search results with various filter options
	 *
	 * @param $project_id ID of the project that should be queried. The ID can be found in the URL when viewing the project in the Searchmetrics Suite
	 * @param $se_id ID of the search engine that should be queried. A complete list of IDs can be found http://api.searchmetrics.com/api-calls/searchengines. Please make sure your project includes the se_id.
	 * @param $url Domains within the project that should be queried. Several domains must be separated with a comma without blank. Please use the exact name that is used within the project. E.g "www.searchmetrics.com" instead of "searchmetrics.com".
	 * @param $cpc_from = "" Filter: Lowest estimated CPC for returned keywords. E.g. if you want all keywords with a minimum estimated CPC of 1€ visitors this parameter has to be set to "1".
	 * @param $cpc_to = "" Filter: Highest estimated CPC for returned keywords. E.g. if you want all keywords with a maximum estimated CPC of 2 this parameter has to be set to "2".
	 * @param $date = "" Date for which the rankings should be queried
	 * @param $limit = "" Limit for the number of result rows Permitted values are 10, 25, 50, 100, 250 Default is 10
	 * @param $offset = "" Offset for result set Must be a multiple of allowed values for the parameter "limit" Default is 0
	 * @param $position_from = "" Filter: Lowest ranking of keywords that should be returned. E.g. if you want all keywords starting from the position 4 (meaning 4,5,6 etc.) this parameter has to be set to "4".
	 * @param $position_to = "" Filter: Highest ranking of keywords that should be returned. E.g. if you want all keywords up to position 3 ( resulting in all keywords with a SERP of 1, 2 or 3) this parameter has to be set to "3".
	 * @param $searchvolume_from = "" Filter: Lowest monthly search volume in Google for returned keywords. E.g. if you want all keywords with a minimum estimated search volume of 300 this parameter has to be set to "300".
	 * @param $searchvolume_to = "" Filter: Highest estimated monthly search volume for returned keywords. E.g. if you want all keywords with a maximum estimated monthly search volume of 1000 this parameter has to be set to "1000".
	 * @param $traffic_from = "" Filter: Lowest estimated traffic for returned keywords. E.g. if you want all keywords with a minimum estimated traffic of 300 visitors this parameter has to be set to "300".
	 * @param $traffic_to = "" Filter: Highest estimated monthly search volume for returned keywords. E.g. if you want all keywords with a maximum estimated monthly search volume of 1000 this parameter has to be set to "1000".
	 * @param $trend_interval = "" Set the time range for the trend comparisons. To compare the actual results with the last results use "last" (default). Other possible values are "weekly" (last week) and monthly (last month).
	 * @param $type = "" Universal search type. Possible values are universal, news, maps, video, images and shopping.
	 */
	public function ProjectOrganicGetListRankingsFilter($project_id, $se_id, $url, $cpc_from = "", $cpc_to = "", $date = "", $limit = "", $offset = "", $position_from = "", $position_to = "", $searchvolume_from = "", $searchvolume_to = "", $traffic_from = "", $traffic_to = "", $trend_interval = "", $type = "")
	{
		return $this->run('ProjectOrganicGetListRankingsFilter', get_defined_vars(), 'GET');
	}

	/**
	 * Get the SEO visibility for a project or for the tags of a project.
	 *
	 * @param $project_id ID of the project that should be queried. The ID can be found in the URL when viewing the project in the Searchmetrics Suite.
	 * @param $se_id ID of the search engine that should be queried. A complete list of IDs can be found <a href="http://api.searchmetrics.com/api-calls/searchengines">http://api.searchmetrics.com/api-calls/searchengines</a>. Please make sure your project includes the se_id.
	 * @param $url Domains (project or benchmark) within the project that should be queried. Several domains must be separated with a comma without blank. Please use the exact name that is used within the project. E.g "www.searchmetrics.com" instead of "searchmetrics.com".
	 * @param $tags = "" Comma separated list of tags. Please note: When using more than one tag only keywords with both tags will be included
	 * @param $trend_interval = "" Set the time range for the trend comparisons. To compare the actual results with the last results use "last" (default). Other possible values are "weekly" (last week) and "monthly" (last month).
	 */
	public function ProjectOrganicGetValueSeoVisibility($project_id, $se_id, $url, $tags = "", $trend_interval = "")
	{
		return $this->run('ProjectOrganicGetValueSeoVisibility', get_defined_vars(), 'GET');
	}

	/**
	 * Keywords with the highest absolute gains in organic search traffic for a given domain with filter options
	 *
	 * @param $countrycode A two letter country code as specified in ISO 3166-1
	 * @param $date Date for which the winners are queried
	 * @param $url Either a domain or subdomain
	 * @param $cpc_from = "" Filter: Lowest estimated CPC for returned keywords. E.g. if you want all keywords with a minimum estimated CPC of 1€ visitors this parameter has to be set to "1".
	 * @param $cpc_to = "" Filter: Highest estimated CPC for returned keywords. E.g. if you want all keywords with a maximum estimated CPC of 2 this parameter has to be set to "2".
	 * @param $currency = "" Currency code as specified in ISO 4217. Default is "EUR".
	 * @param $delta_position_from = "" Filter: Lowest change in position of a keyword that should be returned. E.g. if you want all keywords with a change of 4 or more positions this parameter has to be set to "4".
	 * @param $delta_position_to = "" Filter: Highest change in position of a keyword that should be returned. E.g. if you want all keywords with a change of 10 or less positions this parameter has to be set to "10".
	 * @param $delta_traffic_from = "" Filter: Lowest change in traffic of a keyword that should be returned. E.g. if you want all keywords with a change of 50 or more visitors this parameter has to be set to "50".
	 * @param $delta_traffic_to = "" Filter: Highest change in traffic of a keyword that should be returned. E.g. if you want all keywords with a change of 1000 or less visitors this parameter has to be set to "1000".
	 * @param $limit = "" Limit for the number of result rows Permitted values are 10, 25, 50, 100, 250 Default is 10.
	 * @param $offset = "" Offset for result set Must be a multiple of allowed values for the parameter "limit" Default is 0.
	 * @param $position_from = "" Filter: Lowest ranking of keywords that should be returned. E.g. if you want all keywords starting from the position 4 (meaning 4,5,6 etc.) this parameter has to be set to "4".
	 * @param $position_to = "" Filter: Highest ranking of keywords that should be returned. E.g. if you want all keywords up to position 3 ( resulting in all keywords with a SERP of 1, 2 or 3) this parameter has to be set to "3".
	 */
	public function ResearchKeywordsGetListWinnersFilter($countrycode, $date, $url, $cpc_from = "", $cpc_to = "", $currency = "", $delta_position_from = "", $delta_position_to = "", $delta_traffic_from = "", $delta_traffic_to = "", $limit = "", $offset = "", $position_from = "", $position_to = "")
	{
		return $this->run('ResearchKeywordsGetListWinnersFilter', get_defined_vars(), 'GET');
	}


	/**
	 * Get a list of different ad variations
	 *
	 * @param $countrycode A two letter country code as specified in ISO 3166-1
	 * @param $url Either a domain or subdomain
	 * @param $limit = "" Limit for the number of result rows Permitted values are 10, 25, 50, 100, 250
	 * @param $offset = "" Offset for result set Must be a multiple of allowed values for the parameter "limit"
	 */
	public function ResearchPaidGetListAdVariations($countrycode, $url, $limit = "", $offset = "")
	{
		return $this->run('ResearchPaidGetListAdVariations', get_defined_vars(), 'GET');
	}

	/**
	 * Keywords with the highest absolute losses in organic search traffic for a given domain with filter options
	 *
	 * @param $countrycode A two letter country code as specified in ISO 3166-1
	 * @param $date Date for which the winners are queried
	 * @param $url Either a domain or subdomain
	 * @param $cpc_from = "" Filter: Lowest estimated CPC for returned keywords. E.g. if you want all keywords with a minimum estimated CPC of 1€ visitors this parameter has to be set to "1".
	 * @param $cpc_to = "" Filter: Highest estimated CPC for returned keywords. E.g. if you want all keywords with a maximum estimated CPC of 2 this parameter has to be set to "2".
	 * @param $currency = "" Currency code as specified in ISO 4217. Default is "EUR".
	 * @param $delta_position_from = "" Filter: Lowest change in position of a keyword that should be returned. E.g. if you want all keywords with a change of 4 or less positions this parameter has to be set to "-4".
	 * @param $delta_position_to = "" Filter: Highest change in position of a keyword that should be returned. E.g. if you want all keywords with a change of 10 or more positions this parameter has to be set to "-10".
	 * @param $delta_traffic_from = "" Filter: Lowest change in traffic of a keyword that should be returned. E.g. if you want all keywords with a change of 50 or less visitors this parameter has to be set to "-50".
	 * @param $delta_traffic_to = "" Filter: Highest change in traffic of a keyword that should be returned. E.g. if you want all keywords with a change of 1000 or more visitors this parameter has to be set to "-1000".
	 * @param $limit = "" Limit for the number of result rows Permitted values are 10, 25, 50, 100, 250 Default is 10.
	 * @param $offset = "" Offset for result set Must be a multiple of allowed values for the parameter "limit" Default is 0.
	 * @param $position_from = "" Filter: Lowest ranking of keywords that should be returned. E.g. if you want all keywords starting from the position 4 (meaning 4,5,6 etc.) this parameter has to be set to "4".
	 * @param $position_to = "" Filter: Highest ranking of keywords that should be returned. E.g. if you want all keywords up to position 3 ( resulting in all keywords with a SERP of 1, 2 or 3) this parameter has to be set to "3".
	 */
	public function ResearchKeywordsGetListLosersFilter($countrycode, $date, $url, $cpc_from = "", $cpc_to = "", $currency = "", $delta_position_from = "", $delta_position_to = "", $delta_traffic_from = "", $delta_traffic_to = "", $limit = "", $offset = "", $position_from = "", $position_to = "")
	{
		return $this->run('ResearchKeywordsGetListLosersFilter', get_defined_vars(), 'GET');
	}

	/**
	 * Lists all available search engines for a given project
	 *
	 * @param $project_id ID of the project that should be queried. The ID can be found in the URL when viewing the project in the Searchmetrics Suite.
	 */
	public function AdminStatusGetListProjectSearchEngines($project_id)
	{
		return $this->run('AdminStatusGetListProjectSearchEngines', get_defined_vars(), 'GET');
	}

	/**
	 * Competitor domains in the paid search
	 *
	 * @param $countrycode A two letter country code as specified in ISO 3166-1
	 * @param $url Either a domain or subdomain
	 * @param $currency = "" Currency code as specified in ISO 4217. Default is "EUR".
	 * @param $limit = "" Limit for the number of result rows Permitted values are 10, 25, 50, 100, 250 Default is 10.
	 * @param $offset = "" Offset for result set Must be a multiple of allowed values for the parameter "limit" Default is 0.
	 */
	public function ResearchPaidGetListCompetitors($countrycode, $url, $currency = "", $limit = "", $offset = "")
	{
		return $this->run('ResearchPaidGetListCompetitors', get_defined_vars(), 'GET');
	}

	/**
	 * Overview comparison of the most relevant shared keywords (comeptititve keywords) for two URLs in paid search results.
	 *
	 * @param $countrycode A two letter country code as specified in ISO 3166-1
	 * @param $url_1 Either a domain or subdomain
	 * @param $url_2 Either a domain or subdomain
	 * @param $currency = "" Currency code as specified in ISO 4217. Default is "EUR".
	 * @param $limit = "" Limit for the number of result rows Permitted values are 10, 25, 50, 100, 250 Default is 10.
	 * @param $offset = "" Offset for result set Must be a multiple of allowed values for the parameter "limit" Default is 0.
	 */
	public function ResearchPaidGetListCommonKeywords($countrycode, $url_1, $url_2, $currency = "", $limit = "", $offset = "")
	{
		return $this->run('ResearchPaidGetListCommonKeywords', get_defined_vars(), 'GET');
	}

	/**
	 * Overview comparison of the most relevant shared keywords (comeptititve keywords) for two URLs in organic search results.
	 *
	 * @param $countrycode A two letter country code as specified in ISO 3166-1
	 * @param $url_1 Either a domain or subdomain
	 * @param $url_2 Either a domain or subdomain
	 * @param $limit = "" Limit for the number of result rows Permitted values are 10, 25, 50, 100, 250 Default is 10.
	 * @param $offset = "" Offset for result set Must be a multiple of allowed values for the parameter "limit" Default is 0.
	 */
	public function ResearchOrganicGetListCommonKeywords($countrycode, $url_1, $url_2, $limit = "", $offset = "")
	{
		return $this->run('ResearchOrganicGetListCommonKeywords', get_defined_vars(), 'GET');
	}

	/**
	 * Distribution of incoming links according to Searchmetrics Page Strength
	 *
	 * @param $url Either a domain, a subdomain or an URL  For a domain or a subdomain all results are counted that refer to any page of the domain or subdomain. For any other URL only results are counted that point directly to the page with this specific URL.
	 */
	public function ResearchLinksGetListSpsSpread($url)
	{
		return $this->run('ResearchLinksGetListSpsSpread', get_defined_vars(), 'GET');
	}

	/**
	 * Subdomains for one given domain
	 *
	 * @param $countrycode A two letter country code as specified in ISO 3166-1
	 * @param $url Get a domain
	 * @param $limit = "" Limit for the number of result rows Permitted values are 10, 25, 50, 100, 250 Default is 10.
	 * @param $offset = "" Offset for result set Must be a multiple of allowed values for the parameter "limit" Default is 0.
	 */
	public function ResearchOrganicGetListSubdomains($countrycode, $url, $limit = "", $offset = "")
	{
		return $this->run('ResearchOrganicGetListSubdomains', get_defined_vars(), 'GET');
	}

	/**
	 * Paid keywords with advertisements for a given domain
	 *
	 * @param $countrycode A two letter country code as specified in ISO 3166-1
	 * @param $url Either a domain or subdomain
	 * @param $limit = "" Limit for the number of result rows Permitted values are 10, 25, 50, 100, 250 Default is 10.
	 * @param $offset = "" Offset for result set Must be a multiple of allowed values for the parameter ""limit"" Default is 0.
	 */
	public function ResearchPaidGetListKeywordsLongtail($countrycode, $url, $limit = "", $offset = "")
	{
		return $this->run('ResearchPaidGetListKeywordsLongtail', get_defined_vars(), 'GET');
	}

	/**
	 * Check whether a list of domains link to a specific URL
	 *
	 * @param $domains A comma separated list of domains which will be checked. Please note: Subdomains and URLs are not allowed! Maximum is 100 domains per call.
	 * @param $url Either a domain, a subdomain or an URL  For a domain or a subdomain all results are counted that refer to any page of the domain or subdomain. For any other URL only results are counted that point directly to the page with this specific URL.
	 */
	public function ResearchLinksPostListIsLinked($domains, $url)
	{
		return $this->run('ResearchLinksPostListIsLinked', get_defined_vars(), 'POST');
	}

	/**
	 * Backlink benchmark table for selected benchmarks of a project
	 *
	 * @param $project_id ID of the project that should be queried. The ID can be found in the URL when viewing the project in the Searchmetrics Suite.
	 * @param $urls comma separated list of benchmarks/projects
	 */
	public function ProjectLinksGetListBenchmarkTable($project_id, $urls)
	{
		return $this->run('ProjectLinksGetListBenchmarkTable', get_defined_vars(), 'GET');
	}

	/**
	 * Keywords with the highest absolute losses in organic search traffic for a given project domain
	 *
	 * @param $project_id ID of the project that should be queried. The ID can be found in the URL when viewing the project in the Searchmetrics Suite.
	 * @param $se_id ID of the search engine that should be queried. A complete list of IDs can be found http://api.searchmetrics.com/api-calls/searchengines. Please make sure your project includes the se_id."
	 * @param $urls DDomains within the project that should be queried. Several domains must be separated with a comma without blank.Please use the exact name that is used within the project. E.g "www.searchmetrics.com" instead of "searchmetrics.com".
	 * @param $date_from = "" Start date from which the data should be queried Format: YYYYMMDD
	 * @param $date_to = "" End date to which the data should be queried Format: YYYYMMDD
	 * @param $limit = "" Number of rows to be queried
	 * @param $offset = "" Position from where to be returned
	 */
	public function ProjectOrganicGetListLosers($project_id, $se_id, $urls, $date_from = "", $date_to = "", $limit = "", $offset = "")
	{
		return $this->run('ProjectOrganicGetListLosers', get_defined_vars(), 'GET');
	}
	
	/**
	 * Keywords with the highest absolute gains in organic search traffic for a given project domain
	 *
	 * @param $project_id ID of the project that should be queried. The ID can be found in the URL when viewing the project in the Searchmetrics Suite.
	 * @param $se_id ID of the search engine that should be queried. A complete list of IDs can be found http://api.searchmetrics.com/api-calls/searchengines. Please make sure your project includes the se_id."
	 * @param $urls DDomains within the project that should be queried. Several domains must be separated with a comma without blank.Please use the exact name that is used within the project. E.g "www.searchmetrics.com" instead of "searchmetrics.com".
	 * @param $date_from = "" Start date from which the data should be queried Format: YYYYMMDD
	 * @param $date_to = "" End date to which the data should be queried Format: YYYYMMDD
	 * @param $limit = "" Number of rows to be queried
	 * @param $offset = "" Position from where to be returned
	 */
	public function ProjectOrganicGetListWinners($project_id, $se_id, $urls, $date_from = "", $date_to = "", $limit = "", $offset = "")
	{
		return $this->run('ProjectOrganicGetListWinners', get_defined_vars(), 'GET');
	}
	
	/**
	 * Get the Marketshare for a project or for the tags of a project.
	 *
	 * @param $project_id ID of the project that should be queried. The ID can be found in the URL when viewing the project in the Searchmetrics Suite.
	 * @param $se_id ID of the search engine that should be queried. A complete list of IDs can be found http://api.searchmetrics.com/api-calls/searchengines. Please make sure your project includes the se_id."
	 * @param $url Domains (project or benchmark) within the project that should be queried. Several domains must be separated with a comma without blank.Please use the exact name that is used within the project. E.g "www.searchmetrics.com" instead of "searchmetrics.com".Format: string
	 * @param $tags = "" Comma separated list of tags.
	 * @param $trend_interval  = "" Set the time range for the trend comparisons. To compare the actual results with the last results use "last". Other possible values are "weekly" (last week; default) and "monthly" (last month).
	 */
	public function ProjectOrganicGetValueMarketshare($project_id, $se_id, $url, $tags = "", $trend_interval  = "")
	{
		return $this->run('ProjectOrganicGetValueMarketshare', get_defined_vars(), 'GET');
	}
	
	/**
	 * Get the traffic potentials of your project keywords
	 *
	 * @param $project_id ID of the project that should be queried. The ID can be found in the URL when viewing the project in the Searchmetrics Suite.
	 * @param $se_id ID of the search engine that should be queried. A complete list of IDs can be found http://api.searchmetrics.com/api-calls/searchengines. Please make sure your project includes the se_id."
	 * @param $url Domain within the project that should be queried.  Please use the exact name that is used within the project. E.g "www.searchmetrics.com" instead of "searchmetrics.com".
	 * @param $limit = "" Number of rows to be queried
	 * @param $offset = "" Position from where to be returned
	 */
	public function ProjectOrganicGetListKeywordPotentials($project_id, $se_id, $url, $limit = "", $offset = "")
	{
		return $this->run('ProjectOrganicGetListKeywordPotentials', get_defined_vars(), 'GET');
	}

	/**
	 * Get the traffic potentials of your project keywords, grouped by your keyword tags
	 *
	 * @param $project_id ID of the project that should be queried. The ID can be found in the URL when viewing the project in the Searchmetrics Suite.
	 * @param $se_id ID of the search engine that should be queried. A complete list of IDs can be found http://api.searchmetrics.com/api-calls/searchengines. Please make sure your project includes the se_id."
	 * @param $url Domains within the project that should be queried.  Please use the exact name that is used within the project. E.g "www.searchmetrics.com" instead of "searchmetrics.com".
	 */
	public function ProjectOrganicGetListTagPotentials($project_id, $se_id, $url)
	{
		return $this->run('ProjectOrganicGetListTagPotentials', get_defined_vars(), 'GET');
	}

	/**
	 * Get a list of keyword traffic potentials
	 *
	 * @param $date_from Start date from which the traffic potentials should be queried
	 * @param $date_to End date to which the traffic potentials should be queried
	 * @param $project_id ID of the project that should be queried. The ID can be found in the URL when viewing the project in the Searchmetrics Suite.
	 * @param $se_id ID of the search engine that should be queried. A complete list of IDs can be found http://api.searchmetrics.com/api-calls/searchengines. Please make sure your project includes the se_id.
	 * @param $url Domains within the project that should be queried.  Please use the exact name that is used within the project. E.g "www.searchmetrics.com" instead of "searchmetrics.com".
	 * @param $currency = "" Currency code as specified in ISO 4217. Default is "EUR".
	 * @param $limit = "" Limit for the number of result rows Permitted values are 10, 25, 50, 100, 250 Default is 10
	 * @param $offset = "" Offset for result set Must be a multiple of allowed values for the parameter "limit" Default is 0
	 * @param $tags = "" Comma separated list of tags. Please note: When using more than one tag only keywords with both tags will be included
	 */
	public function ProjectTrafficGetListKeywordTrafficPotentials($date_from, $date_to, $project_id, $se_id, $url, $currency = "", $limit = "", $offset = "", $tags = "")
	{
		return $this->run('ProjectTrafficGetListKeywordTrafficPotentials', get_defined_vars(), 'GET');
	}

	/**
	 * Get the historic Project SEO Visibility of a project
	 *
	 * @param $date_from End date from which the visibility should be queried
	 * @param $date_to End date to which the visibility should be queried
	 * @param $project_id ID of the project that should be queried. The ID can be found in the URL when viewing the project in the Searchmetrics Suite.
	 * @param $se_id ID of the search engine that should be queried. A complete list of IDs can be found http://api.searchmetrics.com/api-calls/searchengines. Please make sure your project includes the se_id."
	 * @param $url Domains within the project that should be queried. Several domains must be separated with a comma without blank. Please use the exact name that is used within the project. E.g "www.searchmetrics.com" instead of "searchmetrics.com".
	 * @param $tags = "" Comma separated list of tags. Please note: When using more than one tag only keywords with both tags will be included
	 */
	public function ProjectOrganicGetListSeoVisibilityHistoric($date_from, $date_to, $project_id, $se_id, $url, $tags = "")
	{
		return $this->run('ProjectOrganicGetListSeoVisibilityHistoric', get_defined_vars(), 'GET');
	}

	/**
	 * Get the historic ranking distribution of the project  among the top five search results by positions
	 *
	 * @param $date_to End date to which the position spread should be queried
	 * @param $limit Number of day to which the position spread should be queried
	 * @param $project_id ID of the project that should be queried. The ID can be found in the URL when viewing the project in the Searchmetrics Suite.
	 * @param $se_id ID of the search engine that should be queried. A complete list of IDs can be found http://api.searchmetrics.com/api-calls/searchengines. Please make sure your project includes the se_id."
	 * @param $url Domains within the project that should be queried. Several domains must be separated with a comma without blank. Please use the exact name that is used within the project. E.g "www.searchmetrics.com" instead of "searchmetrics.com".
	 * @param $tags = "" Comma separated list of tags. Please note: When using more than one tag only keywords with both tags will be included
	 */
	public function ProjectOrganicGetListPositionSpreadHistoric($date_to, $limit, $project_id, $se_id, $url, $tags = "")
	{
		return $this->run('ProjectOrganicGetListPositionSpreadHistoric', get_defined_vars(), 'GET');
	}

	/**
	 * URL rankings for a project or benchmark domain in organic search results
	 *
	 * @param $project_id ID of the project that should be queried. The ID can be found in the URL when viewing the project in the Searchmetrics Suite.
	 * @param $se_id ID of the search engine that should be queried. A complete list of IDs can be found http://api.searchmetrics.com/api-calls/searchengines. Please make sure your project includes the se_id."
	 * @param $url Domains within the project that should be queried. Several domains must be separated with a comma without blank. Please use the exact name that is used within the project. E.g "www.searchmetrics.com" instead of "searchmetrics.com".
	 * @param $limit = "" Limit for the number of result rows Permitted values are 10, 25, 50, 100, 250
	 * @param $offset = "" Offset for result set Must be a multiple of allowed values for the parameter "limit"
	 * @param $trend_interval = "" Set the time range for the trend comparisons. To compare the actual results with the last results use "last" (default). Other possible values are "weekly" (last week) and monthly (last month).
	 */
	public function ProjectOrganicGetListUrlRankings($project_id, $se_id, $url, $limit = "", $offset = "", $trend_interval = "")
	{
		return $this->run('ProjectOrganicGetListUrlRankings', get_defined_vars(), 'GET');
	}

	/**
	 * 
	 *
	 * @param $project_id ID of the project that should be queried. The ID can be found in the URL when viewing the project in the Searchmetrics Suite.
	 * @param $se_id ID of the search engine that should be queried. A complete list of IDs can be found http://api.searchmetrics.com/api-calls/searchengines.
	 */
	public function ProjectKeywordsGetLastUpdateDate($project_id, $se_id)
	{
		return $this->run('ProjectKeywordsGetLastUpdateDate', get_defined_vars(), 'GET');
	}

	/**
	 * Crawl URLs to update your backlinks
	 *
	 * @param $urls A JSON encoded array of URLs to crawl
	 */
	public function ResearchLinksPostUrlInput($urls)
	{
		return $this->run('ResearchLinksPostUrlInput', get_defined_vars(), 'POST');
	}

	/**
	 * MarketShare for a project or benchmark domain in organic search results
	 *
	 * @param $project_id ID of the project that should be queried. The ID can be found in the URL when viewing the project in the Searchmetrics Suite.
	 * @param $se_id ID of the search engine that should be queried. A complete list of IDs can be found http://api.searchmetrics.com/api-calls/searchengines. Please make sure your project includes the se_id."
	 * @param $url Domains within the project that should be queried. Several domains must be separated with a comma without blank. Please use the exact name that is used within the project. E.g "www.searchmetrics.com" instead of "searchmetrics.com".
	 * @param $date_from = "" Start date from which the marketshare should be queried
	 * @param $date_to = "" End date to which the marketshare should be queried
	 * @param $tags = "" Comma separated list of tags. Please note: When using more than one tag only keywords with both tags will be included
	 */
	public function ProjectOrganicGetListMarketShare($project_id, $se_id, $url, $date_from = "", $date_to = "", $tags = "")
	{
		return $this->run('ProjectOrganicGetListMarketShare', get_defined_vars(), 'GET');
	}

	/**
	 * Universal visibility for a project or benchmark domain in organic search results
	 *
	 * @param $date_from Start date from which the marketshare should be queried
	 * @param $date_to End date to which the marketshare should be queried
	 * @param $project_id ID of the project that should be queried. The ID can be found in the URL when viewing the project in the Searchmetrics Suite.
	 * @param $se_id ID of the search engine that should be queried. A complete list of IDs can be found http://api.searchmetrics.com/api-calls/searchengines. Please make sure your project includes the se_id."
	 * @param $url Domains within the project that should be queried. Several domains must be separated with a comma without blank. Please use the exact name that is used within the project. E.g "www.searchmetrics.com" instead of "searchmetrics.com".
	 * @param $tags = "" Comma separated list of tags. Please note: When using more than one tag only keywords with both tags will be included
	 * @param $types = "" Comma separated list of universal type. Possible values are: news, images, video and maps
	 */
	public function ProjectOrganicGetListUniversalVisibility($date_from, $date_to, $project_id, $se_id, $url, $tags = "", $types = "")
	{
		return $this->run('ProjectOrganicGetListUniversalVisibility', get_defined_vars(), 'GET');
	}

	/**
	 * Competitors rankings for benchmarks
	 *
	 * @param $project_id ID of the project that should be queried. The ID can be found in the URL when viewing the project in the Searchmetrics Suite.
	 * @param $se_id ID of the search engine that should be queried. A complete list of IDs can be found http://api.searchmetrics.com/api-calls/searchengines. Please make sure your project includes the se_id.
	 * @param $urls Domains within the project that should be queried. Several domains must be separated with a comma without blank. Please use the exact name that is used within the project. E.g "www.searchmetrics.com" instead of "searchmetrics.com".
	 */
	public function ProjectOrganicGetListBenchmarkRankings($project_id, $se_id, $urls)
	{
		return $this->run('ProjectOrganicGetListBenchmarkRankings', get_defined_vars(), 'GET');
	}
	
	/**
	 * CCompetitors rankings for Competitors
	 *
	 * @param $project_id ID of the project that should be queried. The ID can be found in the URL when viewing the project in the Searchmetrics Suite.
	 * @param $se_id ID of the search engine that should be queried. A complete list of IDs can be found http://api.searchmetrics.com/api-calls/searchengines. Please make sure your project includes the se_id.
	 * @param $limit = "" Limit for the number of result rows Permitted values are 10, 25, 50, 100, 250 Default is 10
	 * @param $offset = "" Offset for result set Must be a multiple of allowed values for the parameter "limit" Default is 0
	 */
	public function ProjectOrganicGetListCompetitorRankings($project_id, $se_id, $limit = "", $offset = "")
	{
		return $this->run('ProjectOrganicGetListCompetitorRankings', get_defined_vars(), 'GET');
	}
	
	/**
	 * Keywords device distribution
	 *
	 * @param $project_id ID of the project that should be queried. The ID can be found in the URL when viewing the project in the Searchmetrics Suite.
	 * @param $se_id ID of the search engine that should be queried. A complete list of IDs can be found http://api.searchmetrics.com/api-calls/searchengines. Please make sure your project includes the se_id.
	 * @param $limit = "" Limit for the number of result rows Permitted values are 10, 25, 50, 100, 250 Default is 10
	 * @param $offset = "" Offset for result set Must be a multiple of allowed values for the parameter "limit" Default is 0
	 * @param $sort = "" On which value the result will be sorted. Possible values are: desktop, mobile, smartphone, tablet, keyword. Default is: keyword
	 */
	public function ProjectOrganicGetListDistributionKeywords($project_id, $se_id, $limit = "", $offset = "", $sort = "")
	{
		return $this->run('ProjectOrganicGetListDistributionKeywords', get_defined_vars(), 'GET');
	}

	/**
	 * Keyword traffic potentials
	 *
	 * @param $date_from Start date
	 * @param $date_to End date
	 * @param $domain Either a domain or subdomain
	 * @param $project_id ID of the project that should be queried. The ID can be found in the URL when viewing the project in the Searchmetrics Suite.
	 * @param $se_id ID of the search engine that should be queried. A complete list of IDs can be found http://api.searchmetrics.com/api-calls/searchengines. Please make sure your project includes the se_id.
	 * @param $currency = "" Currency code as specified in ISO 4217. Default is "EUR".
	 * @param $forecast = "" 
	 * @param $forecast_from = "" 
	 * @param $forecast_to = "" 
	 * @param $limit = "" Limit for the number of result rows Permitted values are 10, 25, 50, 100, 250 Default is 10
	 * @param $offset = "" Offset for result set Must be a multiple of allowed values for the parameter "limit" Default is 0
	 * @param $sort = "" On which value the result will be sorted.
	 */
	public function ProjectTrafficGetListForecastKeywords($date_from, $date_to, $domain, $project_id, $se_id, $currency = "", $forecast = "", $forecast_from = "", $forecast_to = "", $limit = "", $offset = "", $sort = "")
	{
		return $this->run('ProjectTrafficGetListForecastKeywords', get_defined_vars(), 'GET');
	}

	/**
	 * Project traffic channel performances comparison
	 *
	 * @param $date_from Start date
	 * @param $date_to End date
	 * @param $project_id ID of the project that should be queried. The ID can be found in the URL when viewing the project in the Searchmetrics Suite.
	 */
	public function ProjectTrafficChannelhistory($date_from, $date_to, $project_id)
	{
		return $this->run('ProjectTrafficChannelhistory', get_defined_vars(), 'GET');
	}

	/**
	 * Project traffic user signals
	 *
	 * @param $date_from Start date
	 * @param $date_to End date
	 * @param $project_id ID of the project that should be queried. The ID can be found in the URL when viewing the project in the Searchmetrics Suite.
	 * @param $se_id ID of the search engine that should be queried. A complete list of IDs can be found http://api.searchmetrics.com/api-calls/searchengines. Please make sure your project includes the se_id.
	 */
	public function ProjectTrafficUserSignals($date_from, $date_to, $project_id, $se_id)
	{
		return $this->run('ProjectTrafficUserSignals', get_defined_vars(), 'GET');
	}

	
	/**
	 * Get the list of the top competitors of a given domain.
	 *
	 * @param $countrycode (required)	Country code as specified in ISO 3166-1 Format: US, GB, DE etc
	 * @param $domain (required)	The domain for which the competitors data is requested.Format: domain.tld
	 * @param $currency (optional)	Currency code as specified in ISO 4217. Default is "EUR".Format: EUR, USD etc.
	 * @param $limit (optional)	Data limit
	 * @param $offset (optional)	Data offset
	 */
	public function ResearchContentGetListCompetitors($countrycode, $domain, $currency="EUR", $limit="10",$offset="0")
	{
		return $this->run('ResearchContentGetListCompetitors', get_defined_vars(), 'GET');
	}
	
	/**
	 * Get the list of competitors of a given url
	 *
	 * @param $countrycode (required)	Country code as specified in ISO 3166-1 Format: US, GB, DE etc
	 * @param $url (required)	The url for which the competitors are requested. Format: sub.domain.tld/path/path/file?params
	 * @param $limit (optional)	Data limit
	 * @param $offset (optional)	Data offset
	 */
	public function ResearchContentGetListCompetitorUrls($countrycode, $url, $limit="10",$offset="0")
	{
		return $this->run('ResearchContentGetListCompetitorUrls', get_defined_vars(), 'GET');
	}

	/**
	 * Get the list of the loser urls of a given domain.
	 *
	 * @param $countrycode (required)	Country code as specified in ISO 3166-1 Format: US, GB, DE etc
	 * @param $domain (required)	The domain for which the top urls is requested.Format: domain.tld
	 * @param $keyword_limit (optional)  Number of keywords return with every url. 0 means no keyword return
	 * @param $limit (optional)	Data limit
	 * @param $offset (optional)	Data offset
	 */
	public function ResearchContentGetListLoserUrls($countrycode, $domain, $keyword_limit="", $limit="",$offset="")
	{
		return $this->run('ResearchContentGetListLoserUrls', get_defined_vars(), 'GET');
	}

	/**
	 * Get the list of the top urls of a given domain.
	 *
	 * @param $countrycode (required)	Country code as specified in ISO 3166-1 Format: US, GB, DE etc
	 * @param $domain (required)	The domain for which the top urls is requested.Format: domain.tld
	 * @param $limit (optional)	Data limit
	 * @param $offset (optional)	Data offset
	 * @param $sort = (optional) Sort the result. Possible values: (-)traffic_index_value, (-)keyword_count, (-)seo_value, (-)avg_position Format: -traffic_index_total, -keyword_count
	 */
	public function ResearchContentGetListTopUrls($countrycode, $domain, $limit="", $offset="",$sort="")
	{
		return $this->run('ResearchContentGetListTopUrls', get_defined_vars(), 'GET');
	}
	
	/**
	 * Get the list of keywords of a given url
	 *
	 * @param $countrycode (required)	Country code as specified in ISO 3166-1 Format: US, GB, DE etc
	 * @param $url (required)	The url for which the rankings requested.
	 * @param $limit (optional)	Data limit
	 * @param $offset (optional)	Data offset
	 */
	public function ResearchContentGetListUrlKeywordRankings($countrycode, $url, $limit="",$offset="")
	{
		return $this->run('ResearchContentGetListUrlKeywordRankings', get_defined_vars(), 'GET');
	}
	
	/**
	 * Get the social spread of a given url
	 *
	 * @param $url (required)	The url for which the social spread are requested.
	 */
	public function ResearchContentGetListUrlSocialSpread($url)
	{
		return $this->run('ResearchContentGetListUrlSocialSpread', get_defined_vars(), 'GET');
	}
	
	/**
	 * Get the list of the winner urls of a given domain.
	 *
	 * @param $countrycode (required)	Country code as specified in ISO 3166-1 Format: US, GB, DE etc
	 * @param $domain (required)	The domain for which the top urls is requested.Format: domain.tld
	 * @param $keyword_limit (optional)  Number of keywords return with every url. 0 means no keyword return
	 * @param $limit (optional)	Data limit
	 * @param $offset (optional)	Data offset
	 */
	public function ResearchContentGetListWinnerUrls($countrycode, $domain, $keyword_limit="", $limit="",$offset="")
	{
		return $this->run('ResearchContentGetListWinnerUrls', get_defined_vars(), 'GET');
	}
	
	/**
	 * Get the number of competitor urls of a given domain.
	 *
	 * @param $countrycode (required)	Country code as specified in ISO 3166-1 Format: US, GB, DE etc
	 * @param $domain (required)	The domain for which the top urls is requested.Format: domain.tld	 
	 */
	public function ResearchContentGetValueCompetitorUrlCount($countrycode, $domain)
	{
		return $this->run('ResearchContentGetValueCompetitorUrlCount', get_defined_vars(), 'GET');
	}
	
	/**
	 * Get the SEO value and the SEO value potential of a given domain.
	 *
	 * @param $countrycode (required)	Country code as specified in ISO 3166-1 Format: US, GB, DE etc
	 * @param $currency (optional)	Which currency should have the returned value. default EUR
	 * @param $domain (optional)	The domain for which the top urls is requested.Format: domain.tld	 
	 * @param $url (optional)	The url for which the seo values is requested.
	 */
	public function ResearchContentGetValueSeoValue($countrycode, $currency="EUR", $domain= "",$url="")
	{
		return $this->run('ResearchContentGetValueSeoValue', get_defined_vars(), 'GET');
	}
	
	/**
	 * Get the value of traffic index and traffic index potential of a given domain.
	 *
	 * @param $countrycode (required)	Country code as specified in ISO 3166-1 Format: US, GB, DE etc
	 * @param $domain (required)	The domain for which the traffic index is requested.	 
	 */
	public function ResearchContentGetValueTrafficIndex($countrycode, $domain= "")
	{
		return $this->run('ResearchContentGetValueTrafficIndex', get_defined_vars(), 'GET');
	}
	
	/**
	 * Get the number of backlinks of a given url.
	 *
	 * @param $countrycode (required)	Country code as specified in ISO 3166-1 Format: US, GB, DE etc
	 * @param $url (required)	The url for which the backlinks count is requested.
	 */
	public function ResearchContentGetValueUrlBacklinks($countrycode, $url)
	{
		return $this->run('ResearchContentGetValueUrlBacklinks', get_defined_vars(), 'GET');
	}
	
	/**
	 * Get the number of urls of a given domain.
	 *
	 * @param $countrycode (required)	Country code as specified in ISO 3166-1 Format: US, GB, DE etc
	 * @param $domain (required)	The domain for which the number of urls is requested.
	 */
	public function ResearchContentGetValueUrlCount($countrycode, $domain)
	{
		return $this->run('ResearchContentGetValueUrlCount', get_defined_vars(), 'GET');
	}
	
	/**
	 * Get the value of the traffic index of the given url and the whole domain.
	 *
	 * @param $countrycode (required)	Country code as specified in ISO 3166-1 Format: US, GB, DE etc
	 * @param $url (required)	The url for which the traffic index is requested.
	 */
	public function ResearchContentGetValueUrlDomainTraffic($countrycode, $url)
	{
		return $this->run('ResearchContentGetValueUrlDomainTraffic', get_defined_vars(), 'GET');
	}
	
	/**
	 * Get the number of keywords of a given url and the average of the top 10 competitors.
	 *
	 * @param $countrycode (required)	Country code as specified in ISO 3166-1 Format: US, GB, DE etc
	 * @param $url (required)	The url for which the keyword count is requested.
	 */
	public function ResearchContentGetValueUrlKeywordCount($countrycode, $url)
	{
		return $this->run('ResearchContentGetValueUrlKeywordCount', get_defined_vars(), 'GET');
	}
	
	/**
	 * Get the number of referred domains of a given url.
	 *
	 * @param $countrycode (required)	Country code as specified in ISO 3166-1 Format: US, GB, DE etc
	 * @param $url (required)	The url for which the referred domains count is requested.
	 */
	public function ResearchContentGetValueUrlReferredDomains($countrycode, $url)
	{
		return $this->run('ResearchContentGetValueUrlReferredDomains', get_defined_vars(), 'GET');
	}
	
	/**
	 * Get the social visibility of a given url.
	 *
	 * @param $countrycode (required)	Country code as specified in ISO 3166-1 Format: US, GB, DE etc
	 * @param $url (required)	The url for which the social visibility is requested.
	 */
	public function ResearchContentGetValueUrlSocialVisibility($countrycode, $url)
	{
		return $this->run('ResearchContentGetValueUrlSocialVisibility', get_defined_vars(), 'GET');
	}
	
	/**
	 * Get the value of the traffic index of a given domain and the top 10 competitors.
	 *
	 * @param $countrycode (required)	Country code as specified in ISO 3166-1 Format: US, GB, DE etc
	 * @param $url (required)	The url for which the traffic index is requested.
	 */
	public function ResearchContentGetValueUrlTraffic($countrycode, $url)
	{
		return $this->run('ResearchContentGetValueUrlTraffic', get_defined_vars(), 'GET');
	}
	
	/**
	 * Get the number of winner and loser urls of a given domain.
	 *
	 * @param $countrycode (required)	Country code as specified in ISO 3166-1 Format: US, GB, DE etc
	 * @param $domain (required) The domain for which the count of winner and loser is requested.
	 */
	public function ResearchContentGetValueUrlWinnerLoserCount($countrycode, $domain)
	{
		return $this->run('ResearchContentGetValueUrlWinnerLoserCount', get_defined_vars(), 'GET');
	}
	
	/**
	 * Retrieve data for a content opt crawl
	 *
	 * @param $crawl_id  (required)	Id of the crawl you want to get
	 * @param $project_id  (required) D of the project that should be queried. The ID can be found in the URL when viewing the project in the Searchmetrics Suite.
	 * @param $limit = "" Limit for the number of result rows Permitted values are 10, 25, 50, 100, 250 Default is 10
	 * @param $offset = "" Offset for result set Must be a multiple of allowed values for the parameter "limit" Default is 0
	 * @param $show = "" Witch information to retrieve
	 * @param $sort = "" 
	 * @param $type = Type of Keywords
	 */
	public function ProjectOptimizationGetListContentDetail($crawl_id, $project_id, $limit = "", $offset = "", $show = "",$sort = "", $type="")
	{
		return $this->run('ProjectOptimizationGetListContentDetail', get_defined_vars(), 'GET');
	}
	
	/**
	 * List of available content opt crawls
	 *
	 * @param $project_id  (required) ID of the project that should be queried. The ID can be found in the URL when viewing the project in the Searchmetrics Suite.
	 */
	public function ProjectOptimizationGetListContentOverview($project_id)
	{
		return $this->run('ProjectOptimizationGetListContentOverview', get_defined_vars(), 'GET');
	}
	
	/**
	 * Status of a content opt crawl
	 *
	 * @param $crawl_id  (required)	Id of the crawl you want to get
	 * @param $project_id  (required) ID of the project that should be queried. The ID can be found in the URL when viewing the project in the Searchmetrics Suite.	 
	 */
	public function ProjectOptimizationGetListContentStatus($crawl_id, $project_id)
	{
		return $this->run('ProjectOptimizationGetListContentStatus', get_defined_vars(), 'GET');
	}
	
	/**
	 * Site optimization: errors, warnings and notices.
	 *
	 * @param $project_id  (required) ID of the project that should be queried. The ID can be found in the URL when viewing the project in the Searchmetrics Suite.
	 */
	public function ProjectOptimizationGetListDomainErrors($project_id)
	{
		return $this->run('ProjectOptimizationGetListDomainErrors', get_defined_vars(), 'GET');
	}
	
	/**
	 * Site optimization: errors, warnings and notices.
	 *
	 * @param $project_id  (required) ID of the project that should be queried. The ID can be found in the URL when viewing the project in the Searchmetrics Suite.
	 */
	public function ProjectOptimizationGetListDomainErrorsCount($project_id)
	{
		return $this->run('ProjectOptimizationGetListDomainErrorsCount', get_defined_vars(), 'GET');
	}
	
	/**
	 * Listing of the keyword optimization URLs
	 *
	 * @param $project_id  (required) ID of the project that should be queried. The ID can be found in the URL when viewing the project in the Searchmetrics Suite.
	 * @param $date (optional) Date for which the keywords are queried
	 * @param $limit (optional) Limit for the number of result rows Permitted values are 10, 25, 50, 100, 250 Default is 10
	 * @param $offset (optional) Offset for result set Must be a multiple of allowed values for the parameter "limit" Default is 0
	 */
	public function ProjectOptimizationGetListKeywordUrls($project_id, $date, $limit, $offset)
	{
		return $this->run('ProjectOptimizationGetListKeywordUrls', get_defined_vars(), 'GET');
	}
	
	/**
	 * Get the current url condition with a trend for the last crawl
	 *
	 * @param $project_id  (required) ID of the project that should be queried. The ID can be found in the URL when viewing the project in the Searchmetrics Suite.
	 */
	public function ProjectOptimizationGetListUrlCondition($project_id)
	{
		return $this->run('ProjectOptimizationGetListUrlCondition', get_defined_vars(), 'GET');
	}
	
	/**
	 * Get the current Optimization Domain Score with a trend for the last crawl
	 *
	 * @param $project_id  (required) ID of the project that should be queried. The ID can be found in the URL when viewing the project in the Searchmetrics Suite.
	 */
	public function ProjectOptimizationGetValueDomainScore($project_id)
	{
		return $this->run('ProjectOptimizationGetValueDomainScore', get_defined_vars(), 'GET');
	}
	
	/**
	 * Request a content opt crawl
	 *
	 * @param $keyword Please enter the keyword for the content, you want to check.
	 * @param $project_id ID of the project that should be queried. The ID can be found in the URL when viewing the project in the Searchmetrics Suite.
	 * @param $se_id ID of the search engine that should be queried. A complete list of IDs can be found http://api.searchmetrics.com/api-calls/searchengines. Please make sure your project includes the se_id."
	 * @param $additional_keywords Define 5 more keywords for the topic of the content.
	 * @param $name  = ""  Name for the crawl. If not set, the queried keyword is used
	 * @param $text = ""  If you have no url, please insert the content to check.
	 * @param $url = ""  Please enter the url of your content.
	 */
	public function ProjectOptimizationPostValueContentRequest($keyword,$project_id, $se_id, $additional_keywords = "", $name="",$text="",$url="" )
	{
		return $this->run('ProjectOptimizationPostValueContentRequest', get_defined_vars(), 'GET');
	}
	
	/**
	 * Average position of the created project keywords in the organic search results
	 *
	 * @param $project_id ID of the project that should be queried. The ID can be found in the URL when viewing the project in the Searchmetrics Suite.
	 * @param $se_id ID of the search engine that should be queried. A complete list of IDs can be found http://api.searchmetrics.com/api-calls/searchengines. Please make sure your project includes the se_id."
	 * @param $url  Domains within the project that should be queried. Several domains must be separated with a comma without blank. Please use the exact name that is used within the project. E.g "www.searchmetrics.com" instead of "searchmetrics.com". Format: domain1.tld,domain2.tld
	 * @param $date = ""  Date for which the average position are queried Format: YYYYMMDD
	 */
	public function ProjectRankingsGetValueStatistic($project_id, $se_id, $url,$date="" )
	{
		return $this->run('ProjectRankingsGetValueStatistic', get_defined_vars(), 'GET');
	}
	
	/**
	 * Returns a list of the SSO Crawls associated with a specific project. This call returns all relevant setup information about the site structure crawls that are available for the specified project (e.g. amount of pages crawled, excluded parameters etc.).
	 *
	 * @param $project_id  (required) ID of the project that should be queried. The ID can be found in the URL when viewing the project in the Searchmetrics Suite.
	 * @param $limit (optional) Limit for the number of result rows Permitted values are 10, 25, 50, 100, 250 Default is 10
	 * @param $offset (optional) Offset for result set Must be a multiple of allowed values for the parameter "limit" Default is 0
	 */
	public function ProjectDeepAuditGetListCrawlInfos($project_id,$limit, $offset)
	{
		return $this->run('ProjectDeepAuditGetListCrawlInfos', get_defined_vars(), 'GET');
	}
	
	/**
	 * Get the current Site Structure Optimization Domain Score, Error and Warning with a trend for the last crawl. Domain Score is calculated using the number of identified errors, warnings and suggestions according to the number of analyzed pages. The higher the Domain Score, the better a site is optimized.
	 *
	 * @param $crawl_id (required)
	 * @param $project_id  (required) ID of the project that should be queried. The ID can be found in the URL when viewing the project in the Searchmetrics Suite.	 
	 */
	public function ProjectDeepAuditGetListCrawlResults($crawl_id,$project_id)
	{
		return $this->run('ProjectDeepAuditGetListCrawlResults', get_defined_vars(), 'GET');
	}
	
	/**
	 * This call returns a list of all identified errors, warnings and notices. The field [potential] indicates the amount that each error influences your Domain Score. Special attention should be given to errors with greater potential. Trending results are also critical � are there any errors, warnings or notices that have increased a lot since the last crawl? If so, take a closer look and dig deeper by checking the URLs.
	 *
	 * @param $crawl_id (required)
	 * @param $project_id  (required) ID of the project that should be queried. The ID can be found in the URL when viewing the project in the Searchmetrics Suite.	 
	 */
	public function ProjectDeepAuditGetListCrawlResultsDetails($crawl_id,$project_id)
	{
		return $this->run('ProjectDeepAuditGetListCrawlResultsDetails', get_defined_vars(), 'GET');
	}
	
	/**
	 * Delete a url
	 *
	 * @param $id (required) ID of the url to delete
	 * @param $project_id  (required) ID of the project that should be queried. The ID can be found in the URL when viewing the project in the Searchmetrics Suite.	 
	 */
	public function ProjectSocialDeleteUrl($id,$project_id)
	{
		return $this->run('ProjectSocialDeleteUrl', get_defined_vars(), 'GET');
	}
	
	/**
	 * List urls for a given project
	 *
	 * @param $project_id  (required) ID of the project that should be queried. The ID can be found in the URL when viewing the project in the Searchmetrics Suite.	 
	 * @param $limit (optional) Limit for the number of result rows Permitted values are 10, 25, 50, 100, 250 Default is 10
	 * @param $offset (optional) Offset for result set Must be a multiple of allowed values for the parameter "limit" Default is 0
	 */
	public function ProjectSocialGetListUrls($project_id,$limit, $offset)
	{
		return $this->run('ProjectSocialGetListUrls', get_defined_vars(), 'GET');
	}
	
	/**
	 * Get the visbility for all observed urls for a given project
	 *
	 * @param $end_ts (required) End time (int)
	 * @param $project_id  (required) ID of the project that should be queried. The ID can be found in the URL when viewing the project in the Searchmetrics Suite.	 
	 * @param $start_ts (required) Start time (int)
	 * @param $limit (optional) Limit for the number of result rows Permitted values are 10, 25, 50, 100, 250 Default is 10
	 * @param $offset (optional) Offset for result set Must be a multiple of allowed values for the parameter "limit" Default is 0
	 * @param $sort (optional) Sort by which value. Possible values: svi_trend, -svi_trend, svi, -svi, fb.to, -fb.to, gp.to, -gp.to, tw.to, -tw.to Default value: -svi_trend
	 */
	public function ProjectSocialGetListVisibilityUrls($end_ts ,$project_id,$start_ts, $limit, $offset, $sort)
	{
		return $this->run('ProjectSocialGetListVisibilityUrls', get_defined_vars(), 'GET');
	}
	
	/**
	 * Get the visbility for all observed urls for a given project
	 *
	 * @param $project_id  (required) ID of the project that should be queried. The ID can be found in the URL when viewing the project in the Searchmetrics Suite.	 
	 * @param $urls (required) Urls of the given project, several urls must be separated with a comma without blank.
	 */
	public function ProjectSocialPostAddUrls($project_id,$urls)
	{
		return $this->run('ProjectSocialPostAddUrls', get_defined_vars(), 'GET');
	}

}

?>