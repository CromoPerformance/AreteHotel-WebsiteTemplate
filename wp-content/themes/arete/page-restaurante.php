<?php
/**
 * Template: Página Restaurante
 *
 * Réplica exata da página restaurante.html, com conteúdo editável via ACF.
 *
 * @package AretêHotel
 */
?>
<?php get_header(); ?>

<?php
    $hero = (array) arete_field( 'restaurante_hero', array() );
    $hero_kicker   = ! empty( $hero['kicker'] )   ? $hero['kicker']   : 'Restaurante';
    $hero_subtitle = ! empty( $hero['subtitle'] ) ? $hero['subtitle'] : 'Da horta à mesa, do mar ao prato';
    $hero_logo     = ( ! empty( $hero['logo'] ) && is_array( $hero['logo'] ) && ! empty( $hero['logo']['url'] ) ) ? $hero['logo']['url'] : arete_asset( 'logos/arete-no-bg.avif' );
    $hero_bg       = ( ! empty( $hero['bg'] ) && is_array( $hero['bg'] ) && ! empty( $hero['bg']['url'] ) ) ? $hero['bg']['url'] : arete_asset( 'new/DSCF4141 (1).avif' );
    $scroll_text   = arete_field( 'restaurante_scroll_text', 'Descobrir' );
    ?>
    <section class="hero hero-restaurant hero-subpage" style="background-image:url('<?php echo esc_url( $hero_bg ); ?>')">
      <div class="hero-inner">
        <div class="hero-kicker"><?php echo esc_html( $hero_kicker ); ?></div>
        <img class="hero-logo" src="<?php echo esc_url( $hero_logo ); ?>" alt="Arê" loading="eager" decoding="async">
        <p class="hero-subtitle small"><?php echo esc_html( $hero_subtitle ); ?></p>
      </div>
      <div class="hero-scroll">
        <span class="hero-scroll-text"><?php echo esc_html( $scroll_text ); ?></span>
        <div class="hero-scroll-line"></div>
      </div>
    </section>

    <?php
    $life = (array) arete_field( 'restaurante_lifestyle', array() );
    $life_eyebrow = ! empty( $life['eyebrow'] ) ? $life['eyebrow'] : 'Restaurante Arê';
    $life_title1  = ! empty( $life['title1'] )  ? $life['title1']  : 'Cozinha com';
    $life_title_em= ! empty( $life['title_em'] )? $life['title_em']: 'identidade própria';
    $life_cols_defaults = array(
		array( 'name' => 'Vista para a Marina', 'desc' => 'Cada mesa tem uma paisagem. Acompanhe o movimento das embarcações enquanto saboreia seu prato.' ),
		array( 'name' => 'Menu Diversificado', 'desc' => 'Sabores frescos e cuidadosamente preparados, com ingredientes locais e temperos da horta.' ),
		array( 'name' => 'Momentos Especiais', 'desc' => 'Vista para o pôr do sol, e uma atmosfera encantadora para almoço, fim da tarde e jantar.' ),
    );
    $life_cols = array();
    if ( function_exists( 'have_rows' ) && have_rows( 'restaurante_lifestyle_columns' ) ) {
		while ( have_rows( 'restaurante_lifestyle_columns' ) ) { the_row(); $life_cols[] = array( 'name' => get_sub_field( 'name' ), 'desc' => get_sub_field( 'desc' ) ); }
    }
    if ( empty( $life_cols ) ) { $life_cols = $life_cols_defaults; }
    ?>
    <!-- Lifestyle -->
    <section class="manifesto manifesto--spaced manifesto--no-lines">
      <div class="manifesto-inner">
        <div class="eyebrow" style="margin-bottom: 32px;"><?php echo esc_html( $life_eyebrow ); ?></div>
        <h2 class="section-heading" style="margin-bottom: 48px;"><?php echo esc_html( $life_title1 ); ?><br><em><?php echo esc_html( $life_title_em ); ?></em></h2>
        <div class="marina-columns">
          <?php foreach ( $life_cols as $col ) : ?>
          <div class="marina-column">
            <div class="marina-column-name"><?php echo esc_html( $col['name'] ); ?></div>
            <div class="marina-column-desc"><?php echo wp_kses_post( $col['desc'] ); ?></div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <?php
    $team = (array) arete_field( 'restaurante_team', array() );
    $team_img     = ( ! empty( $team['img'] ) && is_array( $team['img'] ) && ! empty( $team['img']['url'] ) ) ? $team['img']['url'] : arete_asset( 'shared/DSCF4139.avif' );
    $team_eyebrow = ! empty( $team['eyebrow'] ) ? $team['eyebrow'] : 'A equipe';
    $team_title   = ! empty( $team['title'] )   ? $team['title']   : 'Quem cozinha';
    $team_text    = ! empty( $team['text'] )    ? $team['text']    : 'Com olhar atento para os produtores locais e respeito pela tradição caiçara, cada receita é preparada com cuidado e autenticidade por uma equipe que valoriza a simplicidade dos bons ingredientes.';
    ?>
    <!-- Equipe -->
    <section class="split reverse equipe-split">
      <div class="split-media" style="background-image:url('<?php echo esc_url( $team_img ); ?>')" aria-hidden="true"></div>
      <div class="split-copy light">
        <div class="eyebrow"><?php echo esc_html( $team_eyebrow ); ?></div>
        <h2 class="section-heading"><?php echo esc_html( $team_title ); ?></h2>
        <p class="copy-text"><?php echo wp_kses_post( $team_text ); ?></p>
      </div>
    </section>

    <?php
    $kitchen = (array) arete_field( 'restaurante_kitchen', array() );
    $kitchen_img      = ( ! empty( $kitchen['img'] ) && is_array( $kitchen['img'] ) && ! empty( $kitchen['img']['url'] ) ) ? $kitchen['img']['url'] : arete_asset( 'new/horta 2.avif' );
    $kitchen_eyebrow  = ! empty( $kitchen['eyebrow'] ) ? $kitchen['eyebrow'] : 'A cozinha';
    $kitchen_title1   = ! empty( $kitchen['title1'] )  ? $kitchen['title1']  : 'Raízes &';
    $kitchen_title2   = ! empty( $kitchen['title2'] )  ? $kitchen['title2']  : 'Inovação';
    $kitchen_text     = ! empty( $kitchen['text'] )    ? $kitchen['text']    : 'Direto da nossa horta para o prato, ingredientes colhidos no dia, muitas vezes antes do almoço. Nossa gastronomia celebra o território com sensibilidade contemporânea, respeitando a tradição e o compromisso com desperdício zero.';
    ?>
    <!-- A cozinha -->
    <section class="split" id="menu">
      <div class="split-media" style="background-image:url('<?php echo esc_url( $kitchen_img ); ?>')" aria-hidden="true"></div>
      <div class="split-copy light">
        <div class="eyebrow"><?php echo esc_html( $kitchen_eyebrow ); ?></div>
        <h2 class="section-heading"><?php echo esc_html( $kitchen_title1 ); ?><br><?php echo esc_html( $kitchen_title2 ); ?></h2>
        <p class="copy-text"><?php echo wp_kses_post( $kitchen_text ); ?></p>
      </div>
    </section>

    <?php
    $cta_btn = arete_field( 'restaurante_cta_btn', 'Fazer reserva' );
    ?>
    <!-- Manifesto CTA -->
    <section class="manifesto manifesto--spaced manifesto--no-lines">
      <div class="manifesto-inner">
        <a class="btn-outline" href="<?php echo esc_url( arete_whatsapp_url() ); ?>" target="_blank" rel="noopener" style="margin-top: 32px;"><?php echo esc_html( $cta_btn ); ?></a>
      </div>
    </section>

    <?php
    $menu = (array) arete_field( 'restaurante_menu', array() );
    $menu_eyebrow = ! empty( $menu['eyebrow'] ) ? $menu['eyebrow'] : 'Cardápio';
    $menu_title   = ! empty( $menu['title'] )   ? $menu['title']   : 'Menu';
    $menu_vermais = ! empty( $menu['vermais'] ) ? $menu['vermais'] : 'Ver cardápio completo';
    $menu_vermenos= ! empty( $menu['vermenos'] )? $menu['vermenos']: 'Ver menos';

    $menu_gallery_defaults = array( 'shared/DSCF4064.avif', 'new/jantar por do sol restaurante.avif', 'new/sobremesa.avif', 'new/macarrão.avif', 'new/drink.avif' );
    $menu_gallery = array();
    if ( function_exists( 'have_rows' ) && have_rows( 'restaurante_menu_gallery' ) ) {
		while ( have_rows( 'restaurante_menu_gallery' ) ) { the_row(); $gi = get_sub_field( 'img' ); if ( is_array( $gi ) && ! empty( $gi['url'] ) ) { $menu_gallery[] = $gi['url']; } }
    }
    if ( empty( $menu_gallery ) ) { $menu_gallery = array_map( 'arete_asset', $menu_gallery_defaults ); }

    // Fallback completo do cardápio (categorias -> itens).
    $menu_categories_fallback = array(
		'Entradas' => array( 'sub' => '', 'items' => array(
			array( 'name' => 'Trio Árabe', 'price' => 'R$ 71', 'desc' => 'Homus de grão de bico, coalhada seca, babaganoush, pão pita artesanal' ),
			array( 'name' => 'Ceviche a La Limeña', 'price' => 'R$ 81', 'desc' => 'Cubos de peixe do dia, leite de tigre, cebola pluma e chips de raízes' ),
			array( 'name' => 'Tartar de Salmão', 'price' => 'R$ 93', 'desc' => 'Cubos de salmão com molho cítrico, cebola roxa, tomate e aioli de abacate' ),
			array( 'name' => 'Carpaccio Arê', 'price' => 'R$ 69', 'desc' => '' ),
			array( 'name' => 'Filé Aperitivo', 'price' => 'R$ 104', 'desc' => 'Tiras de mignon aceboladas, fonduta de gorgonzola e batatas fritas' ),
			array( 'name' => 'Isca de Peixe', 'price' => 'R$ 86', 'desc' => 'Empanado na panko, acompanha molho tártaro e molho de pimenta' ),
			array( 'name' => 'Do Mar', 'price' => 'R$ 108', 'desc' => 'Camarão e isca de peixe empanados na panko, acompanha molhos de pimenta e tártaro' ),
			array( 'name' => 'Pastel de Camarão', 'price' => 'R$ 64', 'desc' => 'Pastel artesanal de camarão com alho poró, servido com molho de pimenta da casa' ),
			array( 'name' => 'Pastel de Queijo', 'price' => 'R$ 47', 'desc' => 'Pastel artesanal de queijo meia cura, servido com chutney de manga' ),
		) ),
		'Saladas' => array( 'sub' => '', 'items' => array(
			array( 'name' => 'Salada da Horta', 'price' => 'R$ 50', 'desc' => 'Mix de folhas, cenoura, tomatinhos, sementes de abóbora tostadas e vinagrete de laranja com abacate' ),
			array( 'name' => 'Chicken Caesar', 'price' => 'R$ 73', 'desc' => 'Alface americana, tiras de frango grelhados, molho caesar, croutons e queijo parmesão' ),
		) ),
		'Sopas' => array( 'sub' => '', 'items' => array(
			array( 'name' => 'Sopa do Dia', 'price' => 'R$ 50', 'desc' => 'Consulte os sabores disponíveis' ),
		) ),
		'Pizzas' => array( 'sub' => 'Fermentação natural', 'items' => array(
			array( 'name' => 'Calabresa', 'price' => 'R$ 75', 'desc' => 'Pomodoro rústico, queijo mozzarella, calabresa fatiada, cebola e orégano' ),
			array( 'name' => 'Portuguesa', 'price' => 'R$ 77', 'desc' => 'Pomodoro rústico, queijo mozzarella, presunto, cebola, pimentão vermelho e amarelo, ovos cozidos, azeitona preta e orégano' ),
			array( 'name' => 'Margherita', 'price' => 'R$ 73', 'desc' => 'Pomodoro rústico, queijo mozzarella, tomate cereja fresco e manjericão' ),
		) ),
		'Sanduíches' => array( 'sub' => 'Servidos com fritas ou salada', 'items' => array(
			array( 'name' => 'Crispy Fish', 'price' => 'R$ 62', 'desc' => 'Pão brioche, filé de peixe empanado, alface, tomate, cebola roxa e maionese especial' ),
			array( 'name' => 'Burger Aretê', 'price' => 'R$ 73', 'desc' => 'Pão artesanal, burger de angus, queijo meia cura, alface americana, bacon, tomate e picles' ),
			array( 'name' => 'Greek Veggie', 'price' => 'R$ 47', 'desc' => 'Pão pita, tomate, berinjela, abobrinha e cenoura grelhadas, manjericão, pasta de grão de bico e gergelim' ),
		) ),
		'Principais' => array( 'sub' => '', 'items' => array(
			array( 'name' => 'Moqueca Aretê', 'price' => 'R$ 146', 'desc' => 'Frutos do mar, banana da terra, arroz e farofa de dendê' ),
			array( 'name' => 'Salmão Grelhado', 'price' => 'R$ 127', 'desc' => 'Com risotto de limão siciliano e feijões verdes' ),
			array( 'name' => 'Peixe au Beurre Blanc', 'price' => 'R$ 109', 'desc' => 'Peixe do dia, molho Beurre Blanc, e legumes salteados em azeite de brasa' ),
			array( 'name' => 'Chicken Tikka Masala', 'price' => 'R$ 91', 'desc' => 'Iscas de frango marinadas ao estilo indiano, acompanhadas de mil folhas de batata doce e arroz com gergelim' ),
			array( 'name' => 'Tournedos au Rôti', 'price' => 'R$ 119', 'desc' => 'Filé mignon ao rôti com batatas Lucienne' ),
			array( 'name' => 'Filet aux Poivre Vert', 'price' => 'R$ 119', 'desc' => 'Tournedor grelhado ao molho de pimenta do reino verde e spaghettini na manteiga de ervas frescas' ),
		) ),
		'Risottos' => array( 'sub' => '', 'items' => array(
			array( 'name' => 'Risoto de Cogumelos Confitados', 'price' => 'R$ 96', 'desc' => 'Arroz carnaroli, funghi porcini, alho poró, cebola, parmesão e manteiga' ),
			array( 'name' => 'Risoto de Camarão', 'price' => 'R$ 115', 'desc' => 'Arroz arbóreo, camarões salteados, rúcula, tomate cereja, limão siciliano, parmesão e manteiga' ),
			array( 'name' => 'Risoto de Mignon', 'price' => 'R$ 107', 'desc' => 'Tiras de filé mignon e funghi porcini, vinho branco, parmesão e tomilho' ),
		) ),
		'Massas' => array( 'sub' => '', 'items' => array(
			array( 'name' => 'Fetuccine with Prawns', 'price' => 'R$ 119', 'desc' => 'Massa italiana, creme fresco, alho, abobrinha, vinho branco e camarão' ),
			array( 'name' => 'Spaghetti Mare', 'price' => 'R$ 113', 'desc' => 'Massa italiana com molho de frutos do mar (lula, camarão e mexilhão), ao estilo provençal' ),
			array( 'name' => 'Spaghetti alla Carbonara', 'price' => 'R$ 83', 'desc' => 'Com bacon crispy, gemas frescas e parmesão' ),
			array( 'name' => 'Penne ao Pesto', 'price' => 'R$ 73', 'desc' => 'Pesto ao estilo genovês, com tomatinhos e azeitonas pretas' ),
		) ),
		'Sobremesas' => array( 'sub' => '', 'items' => array(
			array( 'name' => 'Brownie de Chocolate', 'price' => 'R$ 42', 'desc' => 'Caramelo salgado, crumble de cacau e sorvetes de creme' ),
			array( 'name' => 'Romeu e Julieta', 'price' => 'R$ 42', 'desc' => 'Flan de queijo com coulis de goiabada e crumble de gengibre' ),
			array( 'name' => 'Sorvete (02 bolas)', 'price' => 'R$ 36', 'desc' => 'Creme ou chocolate' ),
		) ),
    );

    // Lê categorias do ACF; se vazio, usa fallback.
    $menu_categories = array();
    if ( function_exists( 'have_rows' ) && have_rows( 'restaurante_menu_categories' ) ) {
		while ( have_rows( 'restaurante_menu_categories' ) ) {
			the_row();
			$cat_title = get_sub_field( 'title' );
			$cat_sub   = get_sub_field( 'sub' );
			$cat_items = array();
			if ( have_rows( 'items' ) ) { while ( have_rows( 'items' ) ) { the_row(); $cat_items[] = array( 'name' => get_sub_field( 'name' ), 'price' => get_sub_field( 'price' ), 'desc' => get_sub_field( 'desc' ) ); } }
			$menu_categories[] = array( 'title' => $cat_title, 'sub' => $cat_sub, 'items' => $cat_items );
		}
    }
    if ( empty( $menu_categories ) ) {
		foreach ( $menu_categories_fallback as $cat_title => $cdata ) {
			$menu_categories[] = array( 'title' => $cat_title, 'sub' => $cdata['sub'], 'items' => $cdata['items'] );
		}
    }
    ?>
    <!-- Cardápio -->
    <section class="menu-section">
      <div class="menu-layout">
        <!-- Galeria lateral -->
        <div class="menu-gallery">
          <div class="gallery-grid">
            <?php foreach ( $menu_gallery as $g ) : ?>
            <div class="gallery-item"><img src="<?php echo esc_url( $g ); ?>" alt="" loading="lazy"></div>
            <?php endforeach; ?>
          </div>
        </div>

        <!-- Cardápio -->
        <div class="menu-content">
          <div class="menu-inner">
            <div class="eyebrow"><?php echo esc_html( $menu_eyebrow ); ?></div>
            <h2 class="section-heading"><?php echo esc_html( $menu_title ); ?></h2>

            <?php foreach ( $menu_categories as $cat ) : ?>
            <div class="menu-category">
              <h3 class="menu-category-title"><?php echo esc_html( $cat['title'] ); ?></h3>
              <?php if ( ! empty( $cat['sub'] ) ) : ?><p class="menu-category-sub"><?php echo esc_html( $cat['sub'] ); ?></p><?php endif; ?>
              <div class="menu-items">
                <?php foreach ( $cat['items'] as $item ) : ?>
                <div class="menu-item">
                  <div class="menu-item-header">
                    <span class="menu-item-name"><?php echo esc_html( $item['name'] ); ?></span>
                    <span class="menu-item-dots"></span>
                    <span class="menu-item-price"><?php echo esc_html( $item['price'] ); ?></span>
                  </div>
                  <?php if ( ! empty( $item['desc'] ) ) : ?><p class="menu-item-desc"><?php echo wp_kses_post( $item['desc'] ); ?></p><?php endif; ?>
                </div>
                <?php endforeach; ?>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
          <button class="menu-ver-mais" onclick="this.previousElementSibling.classList.toggle('expanded');this.textContent=this.textContent==='<?php echo esc_js( $menu_vermais ); ?>'?'<?php echo esc_js( $menu_vermenos ); ?>':'<?php echo esc_js( $menu_vermais ); ?>'"><?php echo esc_html( $menu_vermais ); ?></button>
        </div>
      </div>
    </section>

    <?php
    $hours = (array) arete_field( 'restaurante_hours', array() );
    $hours_eyebrow = ! empty( $hours['eyebrow'] ) ? $hours['eyebrow'] : 'Horários';
    $hours_title   = ! empty( $hours['title'] )   ? $hours['title']   : 'Funcionamento';
    $hours_cta1    = ! empty( $hours['cta1'] )    ? $hours['cta1']    : 'Para reservas, ligue';
    $hours_phone   = ! empty( $hours['phone'] )   ? $hours['phone']   : '+55 (22) 2008-0155';
    $hours_tel     = ! empty( $hours['tel'] )     ? $hours['tel']     : '+552220080155';
    $hours_block_defaults = array(
		array( 'label' => 'Café da Manhã', 'time' => '07h30 às 10h30', 'note' => 'Aberto a hóspedes e visitantes' ),
		array( 'label' => 'Almoço e Jantar', 'time' => '12h30 às 22h30', 'note' => 'Aberto a hóspedes e visitantes' ),
    );
    $hours_blocks = array();
    if ( function_exists( 'have_rows' ) && have_rows( 'restaurante_hours_blocks' ) ) {
		while ( have_rows( 'restaurante_hours_blocks' ) ) { the_row(); $hours_blocks[] = array( 'label' => get_sub_field( 'label' ), 'time' => get_sub_field( 'time' ), 'note' => get_sub_field( 'note' ) ); }
    }
    if ( empty( $hours_blocks ) ) { $hours_blocks = $hours_block_defaults; }
    ?>
    <!-- Horários -->
    <section class="hours-section">
      <div class="hours-inner">
        <div class="eyebrow"><?php echo esc_html( $hours_eyebrow ); ?></div>
        <h2 class="section-heading"><?php echo esc_html( $hours_title ); ?></h2>

        <div class="hours-grid">
          <?php foreach ( $hours_blocks as $hb ) : ?>
          <div class="hours-block">
            <h3 class="hours-label"><?php echo esc_html( $hb['label'] ); ?></h3>
            <p class="hours-time"><?php echo esc_html( $hb['time'] ); ?></p>
            <p class="hours-note"><?php echo esc_html( $hb['note'] ); ?></p>
          </div>
          <?php endforeach; ?>
        </div>

        <p class="hours-cta"><?php echo esc_html( $hours_cta1 ); ?> <a href="tel:<?php echo esc_attr( $hours_tel ); ?>"><?php echo esc_html( $hours_phone ); ?></a></p>
      </div>
    </section>
<?php get_footer(); ?>
