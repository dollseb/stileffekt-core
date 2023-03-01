
<?php if ( ! empty( $categories_filter_applicants ) || ! empty( $categories_filter_companies ) ): ?>

    <div class="jobs-filters">

        <div class="jobs-filters-inner">

			<?php if ( ! empty( $categories_filter_applicants ) ): ?>
                <div class="filter filter-applicants">
                    <div class="filter-active">
                        <span><?= __( 'Alle Stellen', 'whitelabel' ); ?></span>
                        <i class="icon icon-arrow-down"></i>
                    </div>
                    <div class="filter-elements">
                        <ul>
                            <li class="active" data-filter="all"><?= __( 'Alle Stellen', 'whitelabel' ); ?></li>
							<?php foreach ( $categories_filter_applicants as $applicant ): ?>
                                <li data-filter="<?= sanitize_title( $applicant ) ?>"><?= $applicant ?></li>
							<?php endforeach; ?>
                        </ul>
                    </div>
                </div>
			<?php endif; ?>

			<?php if ( ! empty( $categories_filter_companies ) ): ?>
                <div class="filter filter-companies">
                    <div class="filter-active">
                        <span><?= __( 'Alle Unternehmen', 'whitelabel' ); ?></span>
                        <i class="icon icon-arrow-down"></i>
                    </div>
                    <div class="filter-elements">
                        <ul>
                            <li class="active" data-filter="all"><?= __( 'Alle Unternehmen', 'whitelabel' ); ?></li>
							<?php foreach ( $categories_filter_companies as $company ): ?>
                                <li data-filter="<?= sanitize_title( $company ) ?>"><?= $company ?></li>
							<?php endforeach; ?>
                        </ul>
                    </div>
                </div>
			<?php endif; ?>

        </div>

    </div>

<?php endif; ?>