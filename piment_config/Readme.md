1. Inclue ts config in root page properties, tab "Resources" 
<INCLUDE_TYPOSCRIPT: source="FILE:EXT:piment_config/Configuration/TsConfig/page.tsconfig">

2. Update database with grid elements

#UPDATE tt_content
#SET tx_gridelements_backend_layout = '59'
#WHERE CType = 'gridelements_pi1'
#AND tx_gridelements_backend_layout = '1;