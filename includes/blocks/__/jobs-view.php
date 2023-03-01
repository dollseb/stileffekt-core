<div id="<?= $block_id ?>" class="<?= $block_classes ?>">

    <div class="block-width">

        <div class="block-header">

			<?php if ( ! empty( $headline ) ): ?>
                <div class="headline">
					<?= $headline ?>
                </div>
			<?php endif; ?>

			<?php if ( ! empty( $text ) ): ?>
                <div class="text">
					<?= $text ?>
                </div>
			<?php endif; ?>

			<?php if ( ! empty( $link ) ): ?>
                <div class="g-link">
					<?= $link ?>
                </div>
			<?php endif; ?>

        </div>

        <div class="block-body">

			<?php if ( ! empty( $jobs ) ): ?>

				<?php include 'jobs-view-filter.php'; ?>

                <div class="jobs">

					<?php foreach ( $jobs['result'] as $job ): ?>

                        <?php

						$job_categories = ' all';
                            foreach ($job['rubrication'] as $category) {
	                            $job_categories .= ' ' . sanitize_title($category);
                            }
                        ?>

                        <div class="job<?= $job_categories ?>">

                            <div class="job-toggle">
                                <i class="icon icon-arrow-down"></i>
                            </div>

                            <div class="job-header">

								<?php if ( ! empty( $job['jobtitel'] ) ): ?>
                                    <div class="job-title">
                                        <span><?= __( 'Jobtitel', 'whitelabel' ) ?></span>
                                        <div><?= $job['jobtitel'] ?></div>
                                    </div>
								<?php endif; ?>

								<?php if ( ! empty( $job['rubrication']['Karriereseite2_Abteilung'] ) ): ?>
                                    <div class="job-department">
                                        <span><?= __( 'Abteilung', 'whitelabel' ) ?></span>
                                        <div><?= $job['rubrication']['Karriereseite2_Abteilung'] ?></div>
                                    </div>
								<?php endif; ?>

								<?php if ( ! empty( $job['rubrication']['Karriereseite2_Unternehmen'] ) ): ?>
                                    <div class="job-company">
                                        <span><?= __( 'Unternehmen', 'whitelabel' ) ?></span>
                                        <div><?= $job['rubrication']['Karriereseite2_Unternehmen'] ?></div>
                                    </div>
								<?php endif; ?>

                            </div>

                            <div class="job-body">

	                            <?php if ( ! empty( $job['template']['vars']['companyIntro'] ) ): ?>
                                    <div class="job-intro">
			                            <?= $job['template']['vars']['companyIntro'] ?>
                                    </div>
	                            <?php endif; ?>

								<?php if ( ! empty( $job['template']['vars']['preTitle'] ) ): ?>

                                    <div class="job-preTitle">
										<?= $job['template']['vars']['preTitle'] ?>

                                        <div class="job-title">
		                                    <?= $job['jobtitel'] ?>
                                        </div>

                                    </div>

								<?php endif; ?>

	                            <?php if ( ! empty( $job['template']['vars']['headerTasks'] ) ): ?>
                                    <div class="job-headerTasks">
			                            <?= $job['template']['vars']['headerTasks'] ?>
                                    </div>
	                            <?php endif; ?>
	                            <?php if ( ! empty( $job['template']['vars']['tasks'] ) ): ?>
                                    <div class="job-tasks">
			                            <?= $job['template']['vars']['tasks'] ?>
                                    </div>
	                            <?php endif; ?>
	                            <?php if ( ! empty( $job['template']['vars']['headerProfile'] ) ): ?>
                                    <div class="job-headerProfile">
			                            <?= $job['template']['vars']['headerProfile'] ?>
                                    </div>
	                            <?php endif; ?>

	                            <?php if ( ! empty( $job['template']['vars']['profile'] ) ): ?>
                                    <div class="job-profile">
			                            <?= $job['template']['vars']['profile'] ?>
                                    </div>
	                            <?php endif; ?>

	                            <?php if ( ! empty( $job['template']['vars']['weOffer'] ) ): ?>
                                    <div class="job-offer">
			                            <?= $job['template']['vars']['weOffer'] ?>
                                    </div>
	                            <?php endif; ?>

	                            <?php if ( ! empty( $job['template']['vars']['interested'] ) ): ?>
                                    <div class="job-interested">
			                            <?= $job['template']['vars']['interested'] ?>
                                    </div>
	                            <?php endif; ?>

								<?php if ( ! empty( $job['apply-url'] ) ): ?>
                                    <div class="g-button">
                                        <a class="button style-2" href="<?= $job['apply-url'] ?>" rel="noopener" target="_blank"><?= __( 'jetzt bewerben', 'whitelabel' ) ?></a>
                                    </div>
								<?php endif; ?>

                            </div>

                        </div>

					<?php endforeach; ?>

                </div>

			<?php endif; ?>

        </div>

    </div>

</div>
